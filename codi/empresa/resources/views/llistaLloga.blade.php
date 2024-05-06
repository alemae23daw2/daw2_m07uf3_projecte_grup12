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
            @foreach($dades_lloga as $llog)
            <tr>
            <td>{{$llog->dniClient}}</td>
            <td>{{$llog->codiUnic}}</td>
            <td>{{$llog->dataInici}}</td>
            <td>{{$llog->horaInici}}</td>
            <td>{{$llog->dataFinal}}</td>
            <td>{{$llog->horaFinal}}</td>
            <td>{{$llog->lliuramentClaus}}</td>
            <td>{{$llog->devolucioClaus}}</td>
            <td>{{$llog->preuPerDia}}</td>
            <td>{{$llog->diposit}}</td>
            <td>{{$llog->dipositQuantitat}}</td>
            <td>{{$llog->tipusAsseguranca}}</td>
            <td class="text-left">
                <form action="{{ route('lloga.destroy', $cli->dniClient)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('lloga.edit', $cli->dniClient)}}" class="btn btn-primary btn-sm">Edita</a>
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