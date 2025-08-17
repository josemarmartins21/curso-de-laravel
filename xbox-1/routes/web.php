<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\HTTP\Controllers\JogoController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/jogos', [JogoController::class, 'index'])->name('jogos.index');

Route::get('/jogos/create', [JogoController::class, 'create'])->name('jogos.create');


Route::get('/jogos/servicos', [JogoController::class, 'servicos'])->name('jogos.servicos');


Route::get('/jogos/{id}', [JogoController::class, 'show'])->name('jogos.show');



Route::post('/jogos', [JogoController::class, 'store']);



