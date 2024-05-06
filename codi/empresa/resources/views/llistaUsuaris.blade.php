@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
            <td>Nom</td>
            <td>Email</td>
            <td>Tipus</td>
            <td>Hora d'entrada</td>
            <td>Hora de sortida</td>
            <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            @foreach($dades_usuaris as $usr)
            <tr>
            <td>{{$usr->name}}</td>
            <td>{{$usr->email}}</td>
            <td>{{$usr->tipus}}</td>
            <td>{{$usr->horaEntrada}}</td>
            <td>{{$usr->horaSortida}}</td>
            <td class="text-left">
                <form action="{{ route('usuaris.destroy', $usr->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                </form>
                <a href="{{ route('usuaris.edit', $usr->id)}}" class="btn btn-primary btn-sm">Edita</a>
                <a href="{{ route('usuaris.show', $usr->id)}}" class="btn btn-info btn-sm">Mostra</a>
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