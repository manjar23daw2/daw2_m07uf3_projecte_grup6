<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ApartamentController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LlogaController;
use App\Models\Apartament;
use App\Providers\PDFService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Producte

/*Route::get('/gestioProducte', ClientsController::class . '@index',function () {
    return view('producte.indexProducte');
})->middleware(['auth', 'verified'])->name('gestioProducte');*/

Route::get('/gestioProducte', ApartamentController::class . '@index' ,function () {
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

Route::get('/VeureLloga/{dni}/{codi_unic}', [LlogaController::class, 'show'], function () {
    return view('producte.Lloga.ReadLloga');
})->middleware(['auth', 'verified'])->name('VeureLloga');

Route::get('/EditarLlogaForm/{dni}/{codi_unic}', [LlogaController::class, 'edit'], function () {
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
Route::get('/generate-pdf/apartament/{codi}', [ApartamentController::class, 'pdfA'])->name("generatePDFA");
Route::get('/generate-pdf/client/{dni}', [ClientsController::class, 'pdfC'])->name("generatePDFC");
Route::get('/generate-pdf/lloguer/{codi}/{dni}', [LlogaController::class, 'pdfLL'])->name("generatePDFLL");

//POST

Route::post('/AfegirTreballadors', [UsersController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirTreballadors');

Route::post('/AfegirApartaments/{type}', [ApartamentController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirApartaments');

Route::post('/AfegirClients/{type}', [ClientsController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirClients');

Route::post('/AfegirLloguers/{type}', [LlogaController::class, 'store'])->middleware(['auth', 'verified'])->name('AfegirLloguers');


//PUT

Route::put('/EditarTreballadors/{type}/{id}', [UsersController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarTreballadors');

Route::put('/EditarApartaments/{type}/{id}', [ApartamentController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarApartaments');

Route::put('/EditarClients/{type}/{id}', [ClientsController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarClients');

Route::put('/EditarLloguers/{type}/{dni}/{codi_unic}', [LlogaController::class, 'update'])->middleware(['auth', 'verified'])->name('EditarLloguers');

//DELETE

Route::delete('/EliminarTreballadors/{type}/{id}', [UsersController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarTreballadors');

Route::delete('/EliminarLloguers/{type}/{dni}/{codi_unic}', [LlogaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarLloguers');

Route::delete('/EliminarApartaments/{type}/{id}', [ApartamentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarApartaments');

Route::delete('/EliminarClients/{type}/{id}', [ClientsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('EliminarClients');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
