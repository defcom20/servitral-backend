<?php

namespace App\Http\Controllers\Api\V1\Global;

use App\Models\UsuModulo;
use App\Models\UsuProyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UsuModulosCollection;

class GlobalController extends Controller
{
    
    public function getUsuProyectos()
    {
        $option = UsuProyecto::with('proyecto:id,nombre,estado');

        if (Auth::user()->tipousuario === 2) {
            $data = $option->where('user_id', Auth::user()->id)->get();
        } else {
            $data = $option->whereHas('proyecto', function ($query) {
                $query->where('estado', '1');
            })->where([
                ['user_id', '=', Auth::user()->id],
                ['estado', '!=', '0'],
            ])->get();
        }
        return response(['data' => $data], 201);
    }

    public function updateUsuProyectos(Request $request)
    {
        $option = UsuProyecto::with('proyecto:id,nombre,estado');
        $option->where([['user_id', '=', Auth::user()->id],['estado', '!=', '0']])->update(['estado' => '1']);
        $data = $option->where([['user_id', '=', Auth::user()->id],['uuid', '=', $request->uuid],['estado', '!=', '0']])->update(['estado' => '2']);
        $res = $data===0? "uuid is invalid": $this->getUsuProyectos()->original["data"];
        $status =  $data===0? 404:200;
        return response(['data' => $res], $status);
    }

    public function resetUsuProyectos()
    {
        UsuProyecto::where([['user_id', '=', Auth::user()->id],['estado', '!=', '0']])->update(['estado' => '1']);
        $res = $this->getUsuProyectos()->original["data"];
        return response(['data' => $res], 200);
    }

    public function getMenu()
    {
        $res = UsuProyecto::with([
            'usuModulos' => function($query2){
                $query2->select('id','usu_proyecto_id','modulo_id')->where('estado', 1);
                $query2->with([
                    'modulo' => function($query3){
                        $query3->select('id','nombre')->where('estado', 1);
                    },
                    'usuSubmodulos'=> function($query4){
                        $query4->select('id','tipopermiso','usu_modulo_id','submodulo_id')->where('estado', 1);
                        $query4->with(['submodulo'=> function($query5){
                            $query5->select('id','slug','nombre')->where('estado', 1);
                        }]);
                    }
                ]);
            }
        ])->select('id')->where([['user_id', '=', Auth::user()->id],['estado', '=', 2]])->get();

        $data = count($res);

        $response = [
            "codRes" => $data !=0? '00':'99',
            "data" =>   $data !=0? $res:"Lo sentimos, no tienes proyectos activos."
        ];
        return response()->json($response);

    }

}
