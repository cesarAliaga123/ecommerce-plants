<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('orders', OrderController::class);
});

// Ruta para prueba de navbar
Route::get('/main', function () {
    return view('navbar');
});


// Rutas para productos
Route::resource('products', ProductController::class);

// Rutas para categorías
Route::resource('categories', CategoryController::class);

// Rutas para gestionar las órdenes
Route::resource('orders', OrderController::class);
Route::patch('orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');