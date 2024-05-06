<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use App\Models\Apartament;
use App\Models\Clients;
use App\Models\Lloga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apt = Apartament::all();
        $clients = Clients::all();
        $lloguers = Lloga::all();
        return view('producte.indexProducte', compact('apt', 'clients', 'lloguers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("producte.apartaments.AddApartaments");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codi_unic' => 'required|string|max:7',
            'referencia_catastral' => 'required|string|max:20',
            'ciutat' => 'required|string|max:255',
            'barri' => 'required|string|max:255',
            'nom_carrer' => 'required|string|max:255',
            'numero_carrer' => 'required|integer',
            'pis' => 'nullable|string|max:255',
            'llits' => 'required|integer',
            'habitacions' => 'required|integer',
            'ascensor' => 'required|boolean',
            'calefacció' => 'required|string|max:255',
            'aire_condicionat' => 'required|boolean',
        ]);

        $data = $request->all();

        Log::info('After redirect');

        Apartament::create($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $codi)
    {
        $apt = Apartament::find($codi);
        return view('producte.apartaments.ReadApartaments', compact('apt'));
    }

    public function pdf(string $codi)
    {
        $apt = Apartament::find($codi);
        $pdf = FacadePdf::LoadView('producte.apartaments.PDFApartaments', compact('apt'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $codi)
    {
        $apt = Apartament::findOrFail($codi); // Retrieve the user data by their ID

        return view('producte.apartaments.EditApartaments', compact('apt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $codi)
    {
        $request->validate([
            'codi_unic' => 'required|max:7',
            'referencia_catastral' => 'required|max:20',
            'ciutat' => 'required|max:255',
            'barri' => 'required|max:255',
            'nom_carrer' => 'required|max:255',
            'numero_carrer' => 'required|max:255',
            'pis' => 'required|max:255',
            'llits' => 'required|max:255',
            'habitacions' => 'required|max:255',
            'ascensor' => 'required|boolean',
            'calefacció' => 'required|max:255',
            'aire_condicionat' => 'required|boolean'
        ]);

        $data = $request->all();
        $apt = Apartament::find($codi);
        $apt->update($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'User created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $apt = Apartament::find($id);
        $apt->delete();
        return redirect()->route('gestioProducte')
            ->with('success', 'User deleted successfully');
    }
}
