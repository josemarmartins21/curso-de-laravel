<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\Servico;
use App\Http\Controllers\ConsoleController;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/jogos/cadastro', [JogoController::class, 'create']);


Route::post('/jogos/cadastrar', [JogoController::class, 'store']);


Route::get('/jogos', [JogoController::class, 'index']);




Route::get('/cadastro', [JogoController::class, 'cadastrar']);



Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::get('/servicos', [Servico::class, 'index']);


Route::get('/consoles', [ConsoleController::class, 'index']);



