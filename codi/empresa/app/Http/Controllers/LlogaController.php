<?php

namespace App\Http\Controllers;

use App\Models\Lloga;
use Illuminate\Http\Request;

class LlogaController extends Controller
{
    public function index()
    {
        $dades_lloga = Lloga::all();
        return view('llistaLloga', compact('dades_lloga'));
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
        return view('creaLloga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouLloga = $request->validate([
            'dniClient' => 'required',
            'codiUnic' => 'required',
            'dataInici' => 'required',
            'horaInici' => 'required',
            'dataFinal' => 'required',
            'horaFinal' => 'required',
            'lliuramentClaus' => 'required',
            'devolucioClaus' => 'required',
            'preuPerDia' => 'required',
            'diposit' => 'required',
            'dipositQuantitat' => 'required',
            'tipusAsseguranca' => 'required'
        ]);
        $lloga = Lloga::create($nouLloga);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni)
    {
        $dades_lloga = Lloga::findOrFail($dni);
        return view('mostraLloga',compact('dades_lloga')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $dni)
    {
        $dades_lloga = Lloga::findOrFail($dni);
        return view('actualitzaLloga',compact('dades_lloga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dni)
    {
        $noves_dades_lloga = $request->validate([
            'dniClient' => 'required',
            'codiUnic' => 'required',
            'dataInici' => 'required',
            'horaInici' => 'required',
            'dataFinal' => 'required',
            'horaFinal' => 'required',
            'lliuramentClaus' => 'required',
            'devolucioClaus' => 'required',
            'preuPerDia' => 'required',
            'diposit' => 'required',
            'dipositQuantitat' => 'required',
            'tipusAsseguranca' => 'required'
        ]);
        Lloga::findOrFail($dni)->update($noves_dades_lloga);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        $lloga = Lloga::findOrFail($dni)->delete();;
        return view('dashboard');
    }
}
