<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_clients = Client::all();
        return view('llistaClients', compact('dades_clients'));
        // Recollirà totes les entrades de la taula treballadors i les desarà dins d'una
        //variable de nom $dades_treballadors
        //Cridara a la vista llista.blade.php que es trobarà a resouces/views per mostrar
        //les dades dels treballadors
        //The compact() function creates an array from variables and their values.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dniClient' => 'required',
            'nomCognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreca' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'tipusTarjeta' => 'required',
            'numeroTarjeta' => 'required'
            ]);
        $client = Client::create($nouClient);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        $client = Client::findOrFail($dni)->delete();
        return view('dashboard');
    }
}
