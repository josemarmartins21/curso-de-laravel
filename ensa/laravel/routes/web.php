<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PesoController;

Route::get('/', [PesoController::class, 'index'])->name('welcome');

Route::post('/pesos', [PesoController::class, 'store'])->name('peso');