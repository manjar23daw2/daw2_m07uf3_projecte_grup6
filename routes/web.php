<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ApartamentController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LlogaController;
use App\Providers\PDFService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Producte

Route::get('/gestioProducte', function () {
    return view('producte.indexProducte');
})->middleware(['auth', 'verified'])->name('gestioProducte');

//Cap Departament

//GET
Route::get('/gestioEmpresa', UsersController::class . '@index', function () {
    return view('treballadors.indexTreballadors');
})->middleware(['auth', 'verified'])->name('gestioEmpresa');

Route::get('/AfegirTreballadorsForm', function () {
    return view('treballadors.AddTreballadors');
})->middleware(['auth', 'verified'])->name('AfegirTreballadorsForm');

Route::get('/VeureTreballador/{id}', [UsersController::class, 'show'], function () {
    return view('treballadors.ReadTreballadors');
})->middleware(['auth', 'verified'])->name('VeureTreballador');

Route::get('/EditarTreballadorsForm/{id}', [UsersController::class, 'edit'], function () {
    return view('treballadors.EditTreballadors');
})->middleware(['auth', 'verified'])->name('EditarTreballadorsForm');

Route::get('/generate-pdf/{id}', [UsersController::class, 'pdf'])->name("generatePDF");

//POST

Route::post('/AfegirTreballadors', [UsersController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirTreballadors');

Route::post('/AfegirApartaments', [ApartamentController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirApartaments');

Route::post('/AfegirClients', [ClientsController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirClients');


//PUT

Route::put('/EditarTreballadors/{id}', [UsersController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarTreballadors');

Route::put('/EditarApartaments/{id}', [ApartamentController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarApartaments');

//DELETE

Route::delete('/EliminarTreballadors/{id}', [UsersController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarTreballadors');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
