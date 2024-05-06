<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $dades_clients = Client::all();
        return view('llistaClients', compact('dades_clients'));
    }

    public function pdf(string $dni)
    {
        $dades_client = Client::findOrFail($dni);
        $pdf = PDF::loadView('mostraClient', compact($dades_client));
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaClient');
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
    public function show(string $dni)
    {
        $dades_client = Client::findOrFail($dni);
        return view('mostraClient', compact('dades_client')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni)
    {
        $dades_client = Client::findOrFail($dni);
        return view('actualitzaClient', compact('dades_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dni)
    {
        $noves_dades_client = $request->validate([
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
        Client::findOrFail($dni)->update($noves_dades_client);
        return view('dashboard');
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
