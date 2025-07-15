<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jogos/{id?}', function ($id = 'Xbox') {
    return view('jogos', ['id' => $id]);
});

Route::get('/consoles', function () {
    $busca = request('pagina')??'Xbox';
    return view('consoles', ['busca' => $busca]);
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/sobre', function () {
    return view('sobre');
});


