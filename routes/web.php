<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\PromocaoController;
use App\Http\Controllers\GeneroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//comidas
Route::get('/comidas', [ComidaController::class, 'index'])->middleware(['auth', 'verified'])->name('comidas.index');
Route::get('/comidas/create', [ComidaController::class, 'create'])->middleware(['auth', 'verified'])->name('comidas.create');
Route::post('/comidas', [ComidaController::class, 'store'])->middleware(['auth', 'verified'])->name('comidas.store');
Route::get('/comidas/{comida}', [ComidaController::class, 'show'])->middleware(['auth', 'verified'])->name('comidas.show');
Route::get('/comidas/{comida}/edit', [ComidaController::class, 'edit'])->middleware(['auth', 'verified'])->name('comidas.edit');
Route::put('/comidas/{comida}', [ComidaController::class, 'update'])->middleware(['auth', 'verified'])->name('comidas.update');
Route::delete('/comidas/{comida}', [ComidaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('comidas.destroy');

//gêneros
Route::get('/generos', [GeneroController::class, 'index'])->middleware(['auth', 'verified'])->name('generos.index');
Route::get('/generos/create', [GeneroController::class, 'create'])->middleware(['auth', 'verified'])->name('generos.create');
Route::post('/generos', [GeneroController::class, 'store'])->middleware(['auth', 'verified'])->name('generos.store');
Route::get('/generos/{genero}', [GeneroController::class, 'show'])->middleware(['auth', 'verified'])->name('generos.show');
Route::get('/generos/{genero}/edit', [GeneroController::class, 'edit'])->middleware(['auth', 'verified'])->name('generos.edit');
Route::put('/generos/{genero}', [GeneroController::class, 'update'])->middleware(['auth', 'verified'])->name('generos.update');
Route::delete('/generos/{genero}', [GeneroController::class, 'destroy'])->middleware(['auth', 'verified'])->name('generos.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';