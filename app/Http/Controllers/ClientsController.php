<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Clients::all();
        //$users = User::all();
        return view('producte.indexProducte', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producte.clients.AddClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'dni' => 'required|size:9',
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'edat' => 'required|integer',
            'adreça' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|email|max:255',
            'tipus_targeta' => 'required|max:255',
            'numero_targeta' => 'required|max:255',
        ]);

        $data = $request->all();

        unset($data['updated_at']);
        unset($data['created_at']);

        Clients::create($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni)
    {
        //
        $client = Clients::find($dni);
        return view('producte.clients.ReadClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni)
    {
        //
        $client = Clients::findOrFail($dni); // Retrieve the user data by their ID
        
        return view('producte.clients.EditClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $dni)
    {
        //
        $request->validate([
            'dni' => 'required|size:9',
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'edat' => 'required|integer',
            'adreça' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|email|max:255',
            'tipus_targeta' => 'required|max:255',
            'numero_targeta' => 'required|max:255',
        ]);

        $data = $request->all();

        unset($data['updated_at']);
        unset($data['created_at']);

        $client = Clients::findOrFail($dni);
        $client->update($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        //
        $client = Clients::find($dni);
        $client->delete();
        return redirect()->route('gestioProducte')
            ->with('success', 'Client deleted successfully');
    }

    public function pdfC(string $dni)
    {
        $client = Clients::find($dni);
        $pdf = FacadePDF::LoadView('producte.clients.PDFCleint', compact('client'));
        return $pdf->stream();
    }
}
