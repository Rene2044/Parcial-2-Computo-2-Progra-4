<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;

// 1. Esta es la página principal que muestra tu formulario (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
});

// --- RUTAS DE AUTENTICACIÓN ---

// Esta ruta solo muestra la vista (si tienes una vista separada en auth/login.blade.php)
Route::get('/login', function () {
    return view('auth.login');
});

// ¡IMPORTANTE! Aquí está la clave:
// El nombre 'login' debe estar en la ruta POST, no en la GET.
// Así, el formulario envía los datos aquí.
Route::post('/login', [AuthController::class, 'login'])->name('login');

// --- RUTAS DE VEHÍCULOS ---

// Listar vehículos
Route::get('/vehicles', [VehicleController::class, 'index']);

// Guardar vehículos (Protegida con middleware)
Route::post('/vehicles', [VehicleController::class, 'store'])->middleware('auth');
