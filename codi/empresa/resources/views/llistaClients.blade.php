@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>DNI Client</td>
            <td>Nom i Cognoms</td>
            <td>Edat</td>
            <td>Telefon</td>
            <td>Adreça</td>
            <td>Ciutat</td>
            <td>País</td>
            <td>Email</td>
            <td>Tipus de Tarjeta</td>
            <td>Numero de la Tarjeta</td>
            </tr>
        </thead>
        <tbody>
            @foreach($dades_clients as $cli)
            <tr>
            <td>{{$cli->dniClient}}</td>
            <td>{{$cli->nomCognoms}}</td>
            <td>{{$cli->edat}}</td>
            <td>{{$cli->telefon}}</td>
            <td>{{$cli->adreca}}</td>
            <td>{{$cli->ciutat}}</td>
            <td>{{$cli->pais}}</td>
            <td>{{$cli->email}}</td>
            <td>{{$cli->tipusTarjeta}}</td>
            <td>{{$cli->numeroTarjeta}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection