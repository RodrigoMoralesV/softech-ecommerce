<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsuarioController;
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

Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

Route::post('/check', [LoginController::class, 'check'])->name('login.check');

Route::get('/registro', [RegistroController::class, 'registerForm'])->name('registro.register');

Route::post('/store', [RegistroController::class, 'store'])->name('registro.store');

// Notifacion de verificar el correo
Route::get('/email/verify', [VerifyEmailController::class, 'verifyNotice'])->middleware('auth')->name('verification.notice');

// Verificación de correo
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');

// Reenviar correo de verificación
Route::post('/email/verification-notification', [VerifyEmailController::class, 'verifyHandler'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Enviado a vista de recupera contraseña
Route::get('/forgot-password', [ResetPasswordController::class, 'passwordRequest'])->name('password.request');

// Manejando el envio de correo para recuperar contraseña
Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail'])->name('password.email');

// Enviado a vista de resetear contraseña
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');

// Resetear contraseña
Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');

// Agrupando rutas del carrito
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CarritoController::class, 'index'])->name('cart.cart');
    Route::get('/addToCart/{id}', [CarritoController::class, 'addTocart'])->name('cart.add');
    Route::get('/removeFromCart/{id}', [CarritoController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/removeAllFromcart', [CarritoController::class, 'removeAllFromCart'])->name('cart.removeAll');
});

Route::get('/shop', [SearchController::class, 'index'])->name('shop');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/factura', function() {
    return view('payment.factura');
});

// Rutas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta de pago del carrito
    Route::get('/cart/pay/{total}', [CarritoController::class, 'payment'])->name('cart.payment');

    // Crea la orden por paypal para que el usuario pueda pagar
    Route::get('/get-paypal-token', [PaymentController::class, 'getPayPalToken']);

    // Genera la factura y la envía por correo al cliente
    Route::get('/crear-factura', [FacturaController::class, 'crearFactura'])->name('factura.create');

    // Vista de confirmación de compra
    Route::get('/gracias-por-su-compra', [FacturaController::class, 'thankYouPage'])->name('thank.you');

    // Vista de error de compra
    Route::get('/error-compra', [FacturaController::class, 'orderErrorPage'])->name('error.compra');
});