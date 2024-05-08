<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apartament;
use App\Models\Clients;
use App\Models\Lloga;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $apt = Apartament::all();
        $clients = Clients::all();
        $lloguers = Lloga::all();
        //$users = User::all();
        return view('treballadors.indexTreballadors', compact('users','apt', 'clients', 'lloguers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("treballadors.AddTreballadors");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('treballadors.ReadTreballadors', compact('user'));
    }

    public function pdf(string $id)
    {
        $user = User::find($id);
        $pdf = FacadePdf::LoadView('treballadors.PDFTreballador', compact('user'));
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'type' => 'required|max:255'
        ]);

        $data = $request->all();

        //$data['type'] = "treballador";
        $data['created_at'] = date('Y-m-d H:i:s');
        //$data['updated_at'] = null;

        
        User::create($data);
        return redirect()->route('gestioEmpresa')
            ->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Retrieve the user data by their ID
        
        return view('treballadors.EditTreballadors', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        $data = $request->all();

        $data['updated_at'] = date('Y-m-d H:i:s');
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('gestioEmpresa')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('gestioEmpresa')
            ->with('success', 'User deleted successfully');
    }
}
