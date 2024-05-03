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
            <td>Accions sobre la taula</td>
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
            <td class="text-left">
                <form action="{{ route('clients.destroy', $cli->dniClient)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('clients.edit', $cli->dniClient)}}" class="btn btn-primary btn-sm">Edita</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection