<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InforController;
use App\Models\Event;
use Laravel\Sanctum\Sanctum;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');


Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/
});
