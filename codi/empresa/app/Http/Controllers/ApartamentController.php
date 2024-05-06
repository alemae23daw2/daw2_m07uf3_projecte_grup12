<?php

namespace App\Http\Controllers;

use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
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

    public function pdf($codiUnic)
    {
        $apt = Apartament::findOrFail($codiUnic);
        $html = view('pdfApartament', compact('apt'))->render();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->stream('apt.pdf');
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
        $dades_apartament = Apartament::findOrFail($id);
        return view('mostraApartament',compact('dades_apartament')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dades_apartament = Apartament::findOrFail($id);
        return view('actualitzaApartament',compact('dades_apartament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
        Apartament::findOrFail($id)->update($noves_dades_apartament);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $apartament = Apartament::findOrFail($id)->delete();
        return view('dashboard');
    }
}
