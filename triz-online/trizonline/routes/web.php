<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;





Route::get('/', [EventController::class, 'index']);


Route::get('/contactos', []);

Route::get('/nossahistoria', function () {
    $nomes = ['Daniel Avelino', 'Beatriz Isabel', 'Nelson Tulomba', 'Simão'];
    return view('nossahistoria', ['nomes_func' => $nomes]);
});
