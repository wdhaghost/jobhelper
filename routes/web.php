<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('profiles')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profiles.index'); // Liste des profils
    Route::get('/create', [ProfileController::class, 'create'])->name('profiles.create'); // Formulaire de création
    Route::post('/', [ProfileController::class, 'store'])->name('profiles.store'); // Enregistrement du profil
    Route::get('/{profile}', [ProfileController::class, 'show'])->name('profiles.show'); // Détails d'un profil
    Route::get('/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit'); // Formulaire d'édition
    Route::put('/{profile}', [ProfileController::class, 'update'])->name('profiles.update'); // Mise à jour du profil
    Route::delete('/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy'); // Suppression d'un profil
});