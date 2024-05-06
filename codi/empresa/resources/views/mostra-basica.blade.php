@extends('disseny')
@section('content')
<h1>Dades del client</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr class="table-primary">
            <th scope="col">CAMP</td>
            <th scope="col">VALOR</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>DNI</td>
                <td>{{$dades_clients->dniClient}}</td>
            </tr>
            <tr>
                <td>Nom i Cognoms</td>
                <td>{{$dades_clients->nomCognoms}}</td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td>{{$dades_clients->telefon}}</td>
            </tr>
            <tr>
                <td>Adreça</td>
                <td>{{$dades_clients->adreca}}</td>
            </tr>
            <tr>
                <td>Ciutat</td>
                <td>{{$dades_clients->ciutat}}</td>
            </tr>
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    </div>
<div>
@endsection