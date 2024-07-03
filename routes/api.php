<?php

use App\Http\Controllers\Api\UsuarioController;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categorias', function () {
    $categorias = Categoria::all();
    return response()->json($categorias);
});

Route::get('/categorias/{id}', function ($id) {
    $categoria = Categoria::find($id);
    return $categoria;
});

Route::get('/productos', function () {
    $productos = Producto::all();
    return response()->json($productos);
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return $producto;
});

Route::post('/registro', [UsuarioController::class, 'registro']);

Route::post('/login', [UsuarioController::class, 'login']);

Route::group([
    'middleware' => ['auth:sanctum']
], function(){
    Route::get('/perfil', [UsuarioController::class, 'perfil']);

    Route::get('/logout', [UsuarioController::class, 'logout']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
