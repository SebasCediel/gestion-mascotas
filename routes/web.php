<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RazaController;

// Ruta de bienvenida (opcional)
Route::get('/', function () {
    return view('welcome');
});

// Rutas CRUD para dueños
Route::resource('owners', OwnerController::class);

// Rutas CRUD para mascotas
Route::resource('mascotas', MascotaController::class);

// Rutas CRUD para razas
Route::resource('razas', RazaController::class);