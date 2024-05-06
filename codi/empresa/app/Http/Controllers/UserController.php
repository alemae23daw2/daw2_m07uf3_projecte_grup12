<?php

namespace App\Http\Controllers;

use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dades_usuaris = User::all();
        return view('llistaUsuaris', compact('dades_usuaris'));
    }

    public function pdf($nom)
    {
        $user = User::findOrFail($nom);
        $html = view('pdfUsuari', compact('user'))->render();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->stream('usuari.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaUsuari');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'horaEntrada' => 'required',
            'horaSortida' => 'required'
        ]);
        $usuari = User::create($nouUsuari);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nom)
    {
        $dades_usuari = User::findOrFail($nom);
        return view('mostraUsuari', compact('dades_usuari'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nom)
    {
        $dades_usuari = User::findOrFail($nom);
        return view('actualitzaUsuari', compact('dades_usuari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nom)
    {
        $noves_dades_user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'horaEntrada' => 'required',
            'horaSortida' => 'required'
        ]);
        User::findOrFail($nom)->update($noves_dades_user);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nom)
    {
        $usuari = User::findOrFail($nom)->delete();
        return view('dashboard');
    }   
}
