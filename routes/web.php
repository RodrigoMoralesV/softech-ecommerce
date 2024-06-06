<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('index', IndexController::class);

Route::resource('producto', ProductoController::class);

Route::get('/login', [LoginController::class, 'login']);

Route::post('/check', [LoginController::class, 'check']);

Route::get('/registro', [RegistroController::class, 'registerForm']);

Route::post('/store', [RegistroController::class, 'store']);

Route::get('/carrito', function() {
  return view("cart");
});

Route::get('/shop', function() {
  return view("shop");
});