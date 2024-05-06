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

Route::get('/gestioProducte', ClientsController::class . '@index' ,function () {
    return view('producte.indexProducte');
})->middleware(['auth', 'verified'])->name('gestioProducte');

//Cap Departament

//GET
Route::get('/gestioEmpresa', UsersController::class . '@index', function () {
    return view('treballadors.indexTreballadors');
})->middleware(['auth', 'verified'])->name('gestioEmpresa');

// ---------------------------- TREBALLADORS

Route::get('/AfegirTreballadorsForm', function () {
    return view('treballadors.AddTreballadors');
})->middleware(['auth', 'verified'])->name('AfegirTreballadorsForm');

Route::get('/VeureTreballador/{id}', [UsersController::class, 'show'], function () {
    return view('treballadors.ReadTreballadors');
})->middleware(['auth', 'verified'])->name('VeureTreballador');

Route::get('/EditarTreballadorsForm/{id}', [UsersController::class, 'edit'], function () {
    return view('treballadors.EditTreballadors');
})->middleware(['auth', 'verified'])->name('EditarTreballadorsForm');

// ----------------------------- CLIENTS

Route::get('/AfegirClientsForm', function () {
    return view('producte.clients.AddClient');
})->middleware(['auth', 'verified'])->name('AfegirClientsForm');

Route::get('/VeureClients/{id}', [ClientsController::class, 'show'], function () {
    return view('producte.clients.ReadClient');
})->middleware(['auth', 'verified'])->name('VeureClients');

Route::get('/EditarClientsForm/{id}', [ClientsController::class, 'edit'], function () {
    return view('producte.client.EditClient');
})->middleware(['auth', 'verified'])->name('EditarClientsForm');

// ---------------------------------- LLOGUERS

Route::get('/AfegirLlogaForm', function () {
    return view('producte.Lloga.AddLloga');
})->middleware(['auth', 'verified'])->name('AfegirLlogaForm');

Route::get('/VeureLloga/{id}', [LlogaController::class, 'show'], function () {
    return view('producte.Lloga.ReadLloga');
})->middleware(['auth', 'verified'])->name('VeureLloga');

Route::get('/EditarLlogaForm/{id}', [LlogaController::class, 'edit'], function () {
    return view('producte.Lloga.EditLloga');
})->middleware(['auth', 'verified'])->name('EditarLlogaForm');

// ----------------------------------- APARTAMENTS

Route::get('/AfegirApartamentsForm', function () {
    return view('producte.apartaments.AddApartaments');
})->middleware(['auth', 'verified'])->name('AfegirApartamentsForm');

Route::get('/VeureApartaments/{id}', [ApartamentController::class, 'show'], function () {
    return view('producte.apartaments.ReadApartament');
})->middleware(['auth', 'verified'])->name('VeureApartaments');

Route::get('/EditarApartamentsForm/{id}', [ApartamentController::class, 'edit'], function () {
    return view('producte.apartaments.EditApartaments');
})->middleware(['auth', 'verified'])->name('EditarApartamentsForm');

// -------------------------------------------------

Route::get('/generate-pdf/{id}', [UsersController::class, 'pdf'])->name("generatePDF");

//POST

Route::post('/AfegirTreballadors', [UsersController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirTreballadors');

Route::post('/AfegirApartaments', [ApartamentController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirApartaments');

Route::post('/AfegirClients', [ClientsController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirClients');

Route::post('/AfegirLloguers', [LlogaController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirLloguers');


//PUT

Route::put('/EditarTreballadors/{id}', [UsersController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarTreballadors');

Route::put('/EditarApartaments/{id}', [ApartamentController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarApartaments');

Route::post('/EditarClients', [ClientsController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarClients');

Route::post('/EditarLloguers', [LlogaController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarLloguers');

//DELETE

Route::delete('/EliminarTreballadors/{id}', [UsersController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarTreballadors');

Route::delete('/EliminarLloguers/{id}', [LlogaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarLloguers');

Route::delete('/EliminarApartaments/{id}', [ApartamentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarApartaments');

Route::delete('/EliminarClients/{id}', [ClientsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarClients');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
