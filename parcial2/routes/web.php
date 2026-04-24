<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/inventory', function () {
    return view('inventory');
})->middleware('auth')->name('inventory');

Route::get('/vehicles', [VehicleController::class, 'index']);

Route::post('/vehicles', [VehicleController::class, 'store'])->middleware('auth');
