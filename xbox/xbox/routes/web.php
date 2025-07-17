<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jogos', function () {
    $id = request('search');    

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


Route::get('/nomes', function () {
    $nomes = ['Bill Gates', 'Satya Anadela', 'Phill Spencer'];
    $busca = request('search');
    $ceo = 'Microsoft';
    return view('nomes', ['nomes' => $nomes, 'busca' => $busca, 'ceo' => $ceo]);
});


