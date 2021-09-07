<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Global\GlobalController;

Route::group(['prefix' => '/auth', ['middleware' => 'web']], function () {
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [LoginController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        $user = $request->user()->only(['uuid', 'nombre', 'tipousuario', 'estado']);
        return response()->json($user, 200);
    });
    Route::get('/getUsuProyectos',     [GlobalController::class, 'getUsuProyectos']);
    Route::get('/resetUsuProyectos',   [GlobalController::class, 'resetUsuProyectos']);
    Route::get('/getMenu',             [GlobalController::class, 'getMenu']);
    Route::post('/updateUsuProyectos', [GlobalController::class, 'updateUsuProyectos']);
    /*Route::Resources([
        'usuarioProyecto'  => UsuarioProyectoController::class,
        'usuarioModulo'    => UsuarioModuloController::class,
        'usuarioSubmodulo' => UsuarioSubmoduloController::class,
    ]);*/
});
