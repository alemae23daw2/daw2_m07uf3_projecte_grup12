@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>Codi Unic</td>
            <td>Referencia</td>
            <td>Ciutat</td>
            <td>Barri</td>
            <td>Nom Carrer</td>
            <td>Numero Carrer</td>
            <td>Pis</td>
            <td>Numero de Llits</td>
            <td>Numero d'Habitacions</td>
            <td>Ascensor</td>
            <td>Calefacció</td>
            <td>Aire Acondicionat</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            @foreach($dades_apartaments as $apt)
            <tr>
            <td>{{$apt->codiUnic}}</td>
            <td>{{$apt->referencia}}</td>
            <td>{{$apt->ciutat}}</td>
            <td>{{$apt->barri}}</td>
            <td>{{$apt->nomCarrer}}</td>
            <td>{{$apt->numCarrer}}</td>
            <td>{{$apt->pis}}</td>
            <td>{{$apt->numLlits}}</td>
            <td>{{$apt->numHabitacions}}</td>
            <td>{{$apt->ascensor}}</td>
            <td>{{$apt->calefaccio}}</td>
            <td>{{$apt->aireCondicionat}}</td>
            <td class="text-left">
                <form action="{{ route('apartaments.destroy', $apt->codiUnic)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('apartaments.edit', $apt->codiUnic)}}" class="btn btn-primary btn-sm">Edita</a>
                <a href="{{ route('apartaments.show', $apt->codiUnic)}}" class="btn btn-info btn-sm">Mostra</a>
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