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
			<td>{{$client->dniClient}}</td>
		</tr>
		<tr>
			<td>Nom i Cognoms</td>
			<td>{{$client->nomCognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$client->edat}}</td>
		</tr>
		<tr>
			<td>Telefon</td>
			<td>{{$client->telefon}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$client->adreca}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$client->ciutat}}</td>
		</tr>
		<tr>
			<td>Pais</td>
			<td>{{$client->pais}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$client->email}}</td>
		</tr>
		<tr>
			<td>Tipus tarjeta</td>
			<td>{{$client->tipusTarjeta}}</td>
		</tr>
		<tr>
			<td>Numero Tarjeta</td>
			<td>{{$client->numeroTarjeta}}</td>
		</tr>
	</tbody>	
    </table>
<div>
@endsection
