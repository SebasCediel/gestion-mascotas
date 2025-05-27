<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazaController;

// Ruta de bienvenida (opcional)
Route::get('/', function () {
    return view('welcome');
});

Route::resource('razas', RazaController::class);