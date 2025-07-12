<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];
    $artigos = ['Nossas condecorações' => 'Triz foi condecorada varias vezes', 'Parcerias' => 'temos parceria com grandes canais televisivos', 'Objectivo da Triz' => 'O nosso maior foco em o serviço de entrega online'];
    return view('welcome', ['nomes_func' => $nomes, 'artigos' => $artigos]);
});


Route::get('/kitutes', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];
    return view('kitutes', ['nomes_func' => $nomes]);
});


Route::get('/contactos', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];
    return view('contactos', ['nomes_func' => $nomes]);
});

Route::get('/nossahistoria', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];
    return view('nossahistoria', ['nomes_func' => $nomes]);
});
