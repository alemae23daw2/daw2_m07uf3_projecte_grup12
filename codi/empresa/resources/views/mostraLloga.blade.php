@extends('disseny')
@section('content')
<h1>Dades del llogament</h1>
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
			<td>{{$dades_lloga->dniClient}}</td>
		</tr>
        <tr>
			<td>Codi Unic de l'Apartament</td>
			<td>{{$dades_lloga->codiUnic}}</td>
		</tr>
		<tr>
			<td>Data Inici</td>
			<td>{{$dades_lloga->dataInici}}</td>
		</tr>
		<tr>
			<td>Hora Inici</td>
			<td>{{$dades_lloga->horaInici}}</td>
		</tr>
		<tr>
			<td>Data Final</td>
			<td>{{$dades_lloga->dataFinal}}</td>
		</tr>
		<tr>
			<td>Hora Final</td>
			<td>{{$dades_lloga->horaFinal}}</td>
		</tr>
		<tr>
			<td>Lloc de lliurament de les claus</td>
			<td>{{$dades_lloga->lliuramentClaus}}</td>
		</tr>
		<tr>
			<td>Lloc de devolució de les claus</td>
			<td>{{$dades_lloga->devolucioClaus}}</td>
		</tr>
		<tr>
			<td>Preu per Dia</td>
			<td>{{$dades_lloga->preuPerDia}}</td>
		</tr>
		<tr>
			<td>Dipòsit</td>
			<td>{{$dades_lloga->diposit}}</td>
		</tr>
		<tr>
			<td>Quantitat dipòsit</td>
			<td>{{$dades_lloga->dipositQuantitat}}</td>
		</tr>
        <tr>
			<td>Tipus d'assegurança</td>
			<td>{{$dades_lloga->tipusAsseguranca}}</td>
		</tr>
	</tbody>	
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('lloga') }}">Torna a la llista</a>
    </div>
<div>
@endsection
