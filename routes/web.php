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

//filmes
Route::get('/filmes', [FilmeController::class, 'index'])->middleware(['auth', 'verified'])->name('filmes.index');
Route::get('/filmes/create', [FilmeController::class, 'create'])->middleware(['auth', 'verified'])->name('filmes.create');
Route::post('/filmes', [FilmeController::class, 'store'])->middleware(['auth', 'verified'])->name('filmes.store');
Route::get('/filmes/{filme}', [FilmeController::class, 'show'])->middleware(['auth', 'verified'])->name('filmes.show');
Route::get('/filmes/{filme}/edit', [FilmeController::class, 'edit'])->middleware(['auth', 'verified'])->name('filmes.edit');
Route::put('/filmes/{filme}', [FilmeController::class, 'update'])->middleware(['auth', 'verified'])->name('filmes.update');
Route::delete('/filmes/{filme}', [FilmeController::class, 'destroy'])->middleware(['auth', 'verified'])->name('filmes.destroy');

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

//promoções
Route::get('/promocoes', [PromocaoController::class, 'index'])->middleware(['auth', 'verified'])->name('promocoes.index');
Route::get('/promocoes/create', [PromocaoController::class, 'create'])->middleware(['auth', 'verified'])->name('promocoes.create');
Route::post('/promocoes', [PromocaoController::class, 'store'])->middleware(['auth', 'verified'])->name('promocoes.store');
Route::get('/promocoes/{promocao}', [PromocaoController::class, 'show'])->middleware(['auth', 'verified'])->name('promocoes.show');
Route::get('/promocoes/{promocao}/edit', [PromocaoController::class, 'edit'])->middleware(['auth', 'verified'])->name('promocoes.edit');
Route::put('/promocoes/{promocao}', [PromocaoController::class, 'update'])->middleware(['auth', 'verified'])->name('promocoes.update');
Route::delete('/promocoes/{promocao}', [PromocaoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('promocoes.destroy');

//salas
Route::get('/salas', [SalaController::class, 'index'])->middleware(['auth', 'verified'])->name('salas.index');
Route::get('/salas/create', [SalaController::class, 'create'])->middleware(['auth', 'verified'])->name('salas.create');
Route::post('/salas', [SalaController::class, 'store'])->middleware(['auth', 'verified'])->name('salas.store');
Route::get('/salas/{sala}', [SalaController::class, 'show'])->middleware(['auth', 'verified'])->name('salas.show');
Route::get('/salas/{sala}/edit', [SalaController::class, 'edit'])->middleware(['auth', 'verified'])->name('salas.edit');
Route::put('/salas/{sala}', [SalaController::class, 'update'])->middleware(['auth', 'verified'])->name('salas.update');
Route::delete('/salas/{sala}', [SalaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('salas.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';