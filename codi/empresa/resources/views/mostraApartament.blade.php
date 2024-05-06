@extends('disseny')
@section('content')
<h1>Dades de l'apartament</h1>
<div class="mt-5">
	<form action="{{ route('apartaments.pdf', $dades_apartament->codiUnic)}}" method="get" style="display: inline-block">
        <button class="btn btn-lg btn-danger" type="submit">PDF</button>
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
			<td>Codi Únic</td>
			<td>{{$dades_apartament->codiUnic}}</td>
		</tr>
		<tr>
			<td>Referencia</td>
			<td>{{$dades_apartament->referencia}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_apartament->ciutat}}</td>
		</tr>
		<tr>
			<td>Barri</td>
			<td>{{$dades_apartament->barri}}</td>
		</tr>
		<tr>
			<td>Nom Carrer</td>
			<td>{{$dades_apartament->nomCarrer}}</td>
		</tr>
		<tr>
			<td>Num Carrer</td>
			<td>{{$dades_apartament->numCarrer}}</td>
		</tr>
		<tr>
			<td>Pis</td>
			<td>{{$dades_apartament->pis}}</td>
		</tr>
		<tr>
			<td>Numero de Llits</td>
			<td>{{$dades_apartament->numLlits}}</td>
		</tr>
		<tr>
			<td>Numero d'Habitacions</td>
			<td>{{$dades_apartament->numHabitacions}}</td>
		</tr>
		<tr>
			<td>Ascensor</td>
			<td>{{$dades_apartament->ascensor}}</td>
		</tr>
        <tr>
			<td>Calefacció</td>
			<td>{{$dades_apartament->calefaccio}}</td>
		</tr>
		<tr>
			<td>Aire Acondacionat</td>
			<td>{{$dades_apartament->aireCondicionat}}</td>
		</tr>
	</tbody>	
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('apartaments') }}">Torna a la llista</a>
    </div>
<div>
@endsection
