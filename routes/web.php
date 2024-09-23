<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

// Ruta para pagina de presentacion
Route::get('/', function () {
    return view('home');
});

// Ruta para login
Route::get('/login', function() {
    return view('login');
});

Route::get('/sign', function() {
    return view('sign');
});

/*// Middleware para autenticacion 
Route::middleware(['auth'])->group(function () {
    Route::resource('orders', OrderController::class);
});
*/
// Rutas para productos
Route::resource('products', ProductController::class);

// Rutas para categorías
Route::resource('categories', CategoryController::class);

// Rutas para gestionar las órdenes
Route::resource('orders', OrderController::class);
Route::patch('orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

/*// Autenticacion de rutas
Auth::routes();*/

