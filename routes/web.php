<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VerifyEmailController;

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

Route::post('/check', [LoginController::class, 'check'])->name('login.check');

Route::get('/registro', [RegistroController::class, 'registerForm'])->name('registro.register');

Route::post('/store', [RegistroController::class, 'store'])->name('registro.store');

// Notifacion de verificar el correo
Route::get('/email/verify', [VerifyEmailController::class, 'verifyNotice'])->middleware('auth')->name('verification.notice');

// Verificación de correo
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');

// Reenviar correo de verificación
Route::post('/email/verification-notification', [VerifyEmailController::class, 'verifyHandler'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Agrupando rutas del carrito
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CarritoController::class, 'index'])->name('cart.cart');
    Route::get('/addToCart/{id}', [CarritoController::class, 'addTocart'])->name('cart.add');
    Route::get('/removeFromCart/{id}', [CarritoController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/removeAllFromcart', [CarritoController::class, 'removeAllFromCart'])->name('cart.removeAll');
});

Route::get('/shop', [SearchController::class, 'index']);

Route::get('/search', [SearchController::class, 'search']);
