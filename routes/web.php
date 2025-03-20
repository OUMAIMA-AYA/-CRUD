<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PersonController::class, 'index']);

Route::get('/show_person/{id}', [PersonController::class, 'show'])->name('show_person');

Route::delete('/delete_person/{id}', [PersonController::class, 'delete'])->name('delete_person');

Route::get('/create_person', [PersonController::class, 'create'])->name('create_person'); // Affiche le formulaire

Route::post('/store_person', [PersonController::class, 'store'])->name('store_person'); // Traite la création
