<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/kitutes', function () {
    return view('kitutes');
});


Route::get('/contactos', function () {
    return view('contactos');
});
