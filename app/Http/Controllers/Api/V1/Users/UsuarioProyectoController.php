<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Models\UsuProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UsuProyecto::with('proyecto:id,nombre,estado')->where('user_id', Auth::user()->id)->get();
        return response(['data' => $data], 201);
    }
    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        /*$option = UsuProyecto::with('proyecto:id,nombre,estado');
        $option->where([['user_id', '=', Auth::user()->id],['estado', '!=', '0']])->update(['estado' => '1']);
        $data = $option->where([['user_id', '=', Auth::user()->id],['uuid', '=', $request->uuid],['estado', '!=', '0']])->update(['estado' => '2']);
        $res = $data===0? "uuid is invalid": $this->index()->original["data"];
        $status =  $data===0? 404:200;
        return response(['data' => $res], $status);*/
    }

    public function destroy($id)
    {
        //
    }
}
