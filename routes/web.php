<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new-genre', [GenreController::class, 'create'])->name('new-genre.create');
Route::post('/new-genre',[GenreController::class, 'store'])->name('new-genre.store');

Route::get('/new-film', [FilmController::class, 'create'])->name('new-film.create');
Route::post('/new-film', [FilmController::class, 'store'])->name('new-film.store');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::post('films/film/{id}',[FilmController::class, 'show'])->name('films.show');
Route::post("/rent",[RentController::class, 'store'])->name('rent.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
