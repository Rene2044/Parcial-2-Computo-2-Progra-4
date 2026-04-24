<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;

// 1. Página de inicio (Login)
Route::get('/', function () {
    return view('welcome');
})->name('login'); // Es buena práctica nombrar esta ruta también

// --- RUTAS DE AUTENTICACIÓN ---
// Ruta para procesar el Login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- PANEL DE INVENTARIO (PROTEGIDO) ---
// Esta es la página a la que redirigiremos después del login
Route::get('/inventory', function () {
    return view('inventory');
})->middleware('auth')->name('inventory');

// --- RUTAS DE VEHÍCULOS ---

// Listar vehículos
Route::get('/vehicles', [VehicleController::class, 'index']);

// Guardar vehículos (Protegida con middleware)
Route::post('/vehicles', [VehicleController::class, 'store'])->middleware('auth');
