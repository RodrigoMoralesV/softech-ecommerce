<?php

use App\Http\Controllers\Api\UsuarioController;
use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Tipo_identificacion;
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
    $productos = Producto::with([
        'categoria:id_categoria,nombre_categoria', 
        'unidad_medida:id_unidad_medida,descripcion_unidad_de_medida', 
        'embalaje:id_embalaje,descripcion_embalaje', 
        'marca:id_marca,nombre_marca'
    ])->get();
    return response()->json($productos);
});

Route::get('/productos/categoria/{id_categoria}', function ($id_categoria) {
    $productos_categoria = Producto::where('categoria_id',$id_categoria)->get();
    return response()->json($productos_categoria);
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return response()->json($producto);
});

Route::get('/identificaciones', function () {
    $identificaciones = Tipo_identificacion::select(['id_tipo_identificacion','descripcion_tipo_identificacion'])
        ->where('estado', 1)
        ->get();
    return response()->json($identificaciones);
});

Route::get('/marcas', function() {
    $marcas = Marca::select(['id_marca','nombre_marca'])
        ->where('estado', 1)
        ->get();
    return response()->json($marcas);
});

Route::post('/registro', [UsuarioController::class, 'registro']);

Route::post('/login', [UsuarioController::class, 'login']);

Route::group([
    'middleware' => ['auth:sanctum']
], function(){
    Route::get('/perfil', [UsuarioController::class, 'perfil']);

    Route::get('/logout', [UsuarioController::class, 'logout']);
});

Route::get('/ciudades', function () {
    $ciudades = Ciudad::select(['id_ciudad','nombre_ciudad'])->get();
    return response()->json($ciudades);
});

Route::prefix('password')->group(function () {
    // Enviar enlace de restablecimiento de contraseña
    Route::post('/email', [UsuarioController::class, 'passwordEmail']);
    
    // Actualizar la contraseña
    Route::post('/reset', [UsuarioController::class, 'passwordUpdate']);
});

Route::get('/ciudades/departamento/{id}', function ($id) {
    $ciudades = Ciudad::where('departamento_id', $id)->get(['id_ciudad', 'nombre_ciudad']);
    return response()->json($ciudades);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
