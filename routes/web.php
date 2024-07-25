<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Afficher tous les livres
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Afficher la page de création de livre
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Créer un nouveau livre
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Afficher la page d'édition d'un livre
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Mettre à jour un livre existant
Route::match(['put', 'patch'], '/books/{id}', [BookController::class, 'update'])->name('books.update');

// Supprimer un livre existant
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

