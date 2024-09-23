<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;



Auth::routes();
// Ruta de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Redireccionar a diferentes dashboards después del login
Route::middleware('auth')->group(function () {
    Route::get('/user', [App\Http\Controllers\UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/admin', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Rutas del dashboard de administrador y usuario
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});

// Definir la ruta del formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Si estás procesando el registro, asegúrate de que también haya una ruta POST para enviarlo
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para pagina de presentacion
Route::get('/', function () {
    return view('home');
});

Route::get('/adminSign', function(){
    return view('adminSign');
});

// Rutas para productos
Route::resource('products', ProductController::class);

// Rutas para categorías
Route::resource('categories', CategoryController::class);

// Rutas para gestionar las órdenes
Route::resource('orders', OrderController::class);
Route::patch('orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
