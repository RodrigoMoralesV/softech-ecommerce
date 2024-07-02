<?php

use App\Http\Controllers\Api\ApiController;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/productos', function (Request $request) {
    $productos = Producto::all();
    return response()->json($productos);
});

Route::get('/categorias', function (Request $request) {
    $categorias = Categoria::all();
    return response()->json($categorias);
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return $producto;
});

Route::post('/registro',[ApiController::class, 'registro']);

Route::post('/login',[ApiController::class, 'login']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
