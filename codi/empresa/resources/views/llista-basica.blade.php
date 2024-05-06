@extends('disseny')
@section('content')
<h1>Llista de clients</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="table-primary">
            <td>DNI Client</td>
            <td>Nom i Cognoms</td>
            <td>Telefon</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>    
    <tbody>
    @foreach($dades_clients as $client)
    <tr>
    <td>{{$client->dniClient}}</td>
    <td>{{$client->nomCognoms}}</td>
    <td>{{$client->telefon}}</td>
    <td class="text-left">
    <a href="{{ route('clients.show_basic', $client->dniClient)}}"
    class="btn btn-info btn-sm">Mostra</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    </div>
<div>
@endsection