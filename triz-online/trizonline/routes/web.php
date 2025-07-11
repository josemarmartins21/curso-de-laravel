<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];

    return view('welcome', ['nomes_func' => $nomes]);
});


Route::get('/kitutes', function () {
    return view('kitutes');
});


Route::get('/contactos', function () {
    return view('contactos');
});
