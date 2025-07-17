<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jogos', [JogosController::class, 'jogos']);

Route::get('/consoles/{id?}', [JogosController::class, 'consoles']);

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/sobre', function () {
    return view('sobre');
});


Route::get('/nomes', [JogosController::class, 'index']);


