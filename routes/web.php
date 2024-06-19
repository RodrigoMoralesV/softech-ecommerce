<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CarritoController;
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


//cart routes
Route::get('/cart', [CarritoController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add/{id_producto}', [CarritoController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{id_producto}', [CarritoController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/shop', function() {
  return view("shop");
});