<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InforController;

Route::get('/', [EventController::class, 'index']);


Route::get('/events/create', [EventController::class, 'create']);


Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/produtos/adicionar', [InforController::class, 'index']);
Route::get('/produtos/remove', [InforController::class, 'remover']);

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/produt/{id?}', function ($id = null) {
    return view('produt', ['id' => $id]);
});
