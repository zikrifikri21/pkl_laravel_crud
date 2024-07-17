<?php

use App\Http\Controllers\JurnalsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');

Route::get('/jurnals',[JurnalsController::class, 'index'])->name('jurnals');
Route::post('/jurnals',[JurnalsController::class, 'store'])->name('jurnals.store');
Route::get('/jurnals/{id}',[JurnalsController::class, 'edit'])->name('jurnals.edit');
Route::put('/jurnals/{id}',[JurnalsController::class, 'update'])->name('jurnals.update');
Route::delete('/jurnals/{id}',[JurnalsController::class, 'destroy'])->name('jurnals.destroy');
