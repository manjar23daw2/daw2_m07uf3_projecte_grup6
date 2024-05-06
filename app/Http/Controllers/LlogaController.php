<?php

namespace App\Http\Controllers;

use App\Models\Lloga;
use Illuminate\Http\Request;

class LlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("producte.Lloga.AddLloga");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dni' => 'required|string|max:9',
            'codi_unic' => 'required|string|max:7',
            'data_inici_lloguer' => 'required|date',
            'hora_inici_lloguer' => 'required|date_format:H:i:s',
            'data_final_lloguer' => 'required|date',
            'hora_final_lloguer' => 'required|date_format:H:i:s',
            'lloc_lliurament_claus' => 'required|string|max:255',
            'lloc_devolució_claus' => 'required|string|max:255',
            'preu_dia' => 'required|numeric',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|numeric',
            'tipus_assegurança' => 'required|string|max:255',
        ]);

        $data = $request->all();

        Lloga::create($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'Lloguer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni, string $codi_unic)
    {
        //
        $lloga = Lloga::where('dni', $dni)
                ->where('codi_unic', $codi_unic)
                ->first();
        return view('producte.apartaments.ReadApartaments', compact('lloga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni, string $codi_unic)
    {

        $lloga = Lloga::where('dni', $dni)
                ->where('codi_unic', $codi_unic)
                ->first();
        return view('producte.Lloga.ReadLloga', compact('lloga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $dni, string $codi_unic)
    {
        //
        $request->validate([
            'dni' => 'required|string|max:9',
            'codi_unic' => 'required|string|max:7',
            'data_inici_lloguer' => 'required|date',
            'hora_inici_lloguer' => 'required|date_format:H:i:s',
            'data_final_lloguer' => 'required|date',
            'hora_final_lloguer' => 'required|date_format:H:i:s',
            'lloc_lliurament_claus' => 'required|string|max:255',
            'lloc_devolució_claus' => 'required|string|max:255',
            'preu_dia' => 'required|numeric',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|numeric',
            'tipus_assegurança' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $lloga = Lloga::where('dni', $dni)
                ->where('codi_unic', $codi_unic)
                ->first();
        $lloga->update($data);
        return redirect()->route('gestioProducte')
            ->with('success', 'Data created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni, string $codi_unic)
    {
        //
        $lloga = Lloga::where('dni', $dni)
                ->where('codi_unic', $codi_unic)
                ->first();
        $lloga->delete();
        return redirect()->route('gestioProducte')
            ->with('success', 'User deleted successfully');

        
    }
}
