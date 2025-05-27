<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazaController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('razas', RazaController::class);