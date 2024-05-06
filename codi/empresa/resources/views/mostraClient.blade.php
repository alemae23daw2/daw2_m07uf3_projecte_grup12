@extends('disseny')
@section('content')
<h1>Dades del client</h1>
<div class="mt-5">
	<form action="{{ route('clients.pdf', $dades_client->dniClient)}}" method="get" style="display: inline-block">
        <button class="btn btn-danger btn-lg" type="submit">PDF</button>
    </form>
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
			<td>{{$dades_client->dniClient}}</td>
		</tr>
		<tr>
			<td>Nom i Cognoms</td>
			<td>{{$dades_client->nomCognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$dades_client->edat}}</td>
		</tr>
		<tr>
			<td>Telefon</td>
			<td>{{$dades_client->telefon}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_client->adreca}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_client->ciutat}}</td>
		</tr>
		<tr>
			<td>Pais</td>
			<td>{{$dades_client->pais}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_client->email}}</td>
		</tr>
		<tr>
			<td>Tipus tarjeta</td>
			<td>{{$dades_client->tipusTarjeta}}</td>
		</tr>
		<tr>
			<td>Numero Tarjeta</td>
			<td>{{$dades_client->numeroTarjeta}}</td>
		</tr>
	</tbody>	
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
    </div>
	<form action="{{ route('clients.pdf', $dades_client->dniClient)}}" method="get" style="display: inline-block">
        <button class="btn btn-danger btn-sm" type="submit">PDF</button>
    </form>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('clients') }}">Torna a la llista</a>
    </div>
<div>
@endsection
