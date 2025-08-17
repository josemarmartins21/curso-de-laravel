<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\GafanhotoController;


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/users', [GafanhotoController::class, 'index'])->name('users.index');

Route::get('/users/create', [GafanhotoController::class, 'create'])->name('users.create');

Route::post('/users', [GafanhotoController::class, 'store'])->name('users.store');

Route::get('/users/{user}', [GafanhotoController::class, 'show'])->name('users.show');

Route::get('/users/{u}/edit', [GafanhotoController::class, 'edit'])->name('users.user_edit');

Route::put('/users/{user}', [GafanhotoController::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [GafanhotoController::class, 'destroy'])->name('users.destroy');

