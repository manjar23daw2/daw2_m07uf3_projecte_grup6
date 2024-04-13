<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/gestioProducte', function () {
    return view('producte.indexProducte');
})->middleware(['auth', 'verified'])->name('gestioProducte');

Route::get('/gestioEmpresa', function () {
    return view('treballadors.indexTreballadors');
})->middleware(['auth', 'verified'])->name('gestioEmpresa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
