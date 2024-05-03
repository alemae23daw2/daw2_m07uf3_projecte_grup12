<?php

namespace App\Http\Controllers;

use App\Models\Apartament;
use Illuminate\Http\Request;

class ApartamentController extends Controller
{
    public function index()
    {
        $dades_apartaments = Apartament::all();
        return view('llistaApartaments', compact('dades_apartaments'));
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
        return view('creaApartament');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouApartament = $request->validate([
            'codiUnic' => 'required',
            'referencia' => 'required',
            'ciutat' => 'required',
            'barri' => 'required',
            'nomCarrer' => 'required',
            'numCarrer' => 'required',
            'pis' => 'required',
            'numLlits' => 'required',
            'numHabitacions' => 'required',
            'ascensor' => 'required',
            'calefaccio' => 'required',
            'aireCondicionat' => 'required'
        ]);
        $apartament = Apartament::create($nouApartament);
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
    public function edit(string $dni)
    {
        $dades_apartament = Apartament::findOrFail($dni);
        return view('actualitzaApartament',compact('dades_apartament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dni)
    {
        $noves_dades_apartament = $request->validate([
            'codiUnic' => 'required',
            'referencia' => 'required',
            'ciutat' => 'required',
            'barri' => 'required',
            'nomCarrer' => 'required',
            'numCarrer' => 'required',
            'pis' => 'required',
            'numLlits' => 'required',
            'numHabitacions' => 'required',
            'ascensor' => 'required',
            'calefaccio' => 'required',
            'aireCondicionat' => 'required'
        ]);
        Apartament::findOrFail($dni)->update($noves_dades_apartament);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        $apartament = Apartament::findOrFail($dni)->delete();
        return view('dashboard');
    }
}
