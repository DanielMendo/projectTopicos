<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Rutas de categoria
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');
Route::delete('/categoria/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');


