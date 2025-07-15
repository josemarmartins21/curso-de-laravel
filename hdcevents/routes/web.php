<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Matheus';
    $idade = 29;
    $arr = [10,100,212,341,45,12];
    $nomes = ['Mateus', 'Maria', 'João', 'Salvio'];

    return view('welcome', ['nome' => $nome, 
        'idade2' => $idade, 
        'profissao' => 'programador', 
        'arr' => $arr, 
        'nomes' => $nomes
    ]);
});


Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/produtos', function () {
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/produtos_test/{id?}', function ($id = null) {
    return view('produt', ['id' => $id]);
});
