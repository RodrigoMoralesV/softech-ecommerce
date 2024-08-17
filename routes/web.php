<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [IndexController::class, 'index']);

Route::resource('index', IndexController::class);

Route::resource('producto', ProductoController::class);

Route::get('/login', [LoginController::class, 'login'])->name('login.login');

Route::post('/check', [LoginController::class, 'check']);

Route::get('/registro', [RegistroController::class, 'registerForm'])->name('registro.register');

Route::post('/store', [RegistroController::class, 'store'])->name('registro.store');

// Agrupando rutas del carrito
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CarritoController::class, 'index'])->name('cart.cart');
    Route::get('/addToCart/{id}', [CarritoController::class, 'addTocart'])->name('cart.add');
    Route::get('/removeFromCart/{id}', [CarritoController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/removeAllFromcart', [CarritoController::class, 'removeAllFromCart'])->name('cart.removeAll');
});

Route::get('/shop', [SearchController::class, 'index']);

Route::get('/search', [SearchController::class, 'search']);
