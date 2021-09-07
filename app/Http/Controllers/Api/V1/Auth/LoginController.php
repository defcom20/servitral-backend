<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if( Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password, 'estado' => 1])){
            $request->session()->regenerate();
            $user = User::select('uuid', 'nombre', 'tipousuario', 'estado')->where('id', Auth::user()->id)->first();
            
            return response()->json([
                'user' => $user,
                'token' => $request->user()->createToken("token")->plainTextToken,
                'message' => 'Success'
            ]);
        }
        return response([
            'message' => ['Estas credenciales no coinciden con nuestros registros.']
        ], 404);
    }

    public function register(Request $request)
    {
        $attr = $request->validate([
            'uuid ' => 'required',
            'dni ' => 'required',
            'nombre ' => 'required',
            'apellido ' => 'required',
            'fchanacimiento ' => 'required',
            'usuario' => 'required',
            'direccion' => 'required',
            'telefcelular' => 'required',
            'teleffijo' => 'required',
            'usuario' => 'required',
            'passwordunico' => 'required',
            'tipousuario' => 'required',
            'estado' => 'required',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'uuid' => $attr['uuid'],
            'dni' => $attr['dni'],
            'nombre' => $attr['nombre'],
            'apellido' => $attr['apellido'],
            'fchanacimiento' => $attr['fchanacimiento'],
            'usuario' => $attr['usuario'],
            'direccion' => $attr['direccion'],
            'telefcelular' => $attr['telefcelular'],
            'teleffijo' => $attr['teleffijo'],
            'usuario' => $attr['usuario'],
            'passwordunico' => $attr['passwordunico'],
            'tipousuario' => $attr['tipousuario'],
            'estado' => $attr['estado'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        $response = [
            "user" => $user,
            "token" => $user->createToken('API_Token')->plainTextToken
        ];

        //return response($response, 201);
        return response()->json($response, 201);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return response(null, 200);
        return response()->noContent();
    }
}
