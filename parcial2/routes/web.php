<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController; // Importante: importar el controlador

Route::get('/', function () {
    return view('welcome');
});

// --- RUTAS DE AUTENTICACIÓN ---
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

// --- RUTAS DE VEHÍCULOS ---

// 1. Ruta para listar vehículos (PÚBLICA: todos pueden ver)
Route::get('/vehicles', [VehicleController::class, 'index']);

// 2. Ruta para guardar vehículos (PROTEGIDA: solo logueados pueden ingresar datos)
Route::post('/vehicles', [VehicleController::class, 'store'])->middleware('auth');
