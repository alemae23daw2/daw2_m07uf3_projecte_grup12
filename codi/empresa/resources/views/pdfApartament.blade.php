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
			<td>Codi Únic</td>
			<td>{{$apt->codiUnic}}</td>
		</tr>
		<tr>
			<td>Referencia</td>
			<td>{{$apt->referencia}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$apt->ciutat}}</td>
		</tr>
		<tr>
			<td>Barri</td>
			<td>{{$apt->barri}}</td>
		</tr>
		<tr>
			<td>Nom Carrer</td>
			<td>{{$apt->nomCarrer}}</td>
		</tr>
		<tr>
			<td>Num Carrer</td>
			<td>{{$apt->numCarrer}}</td>
		</tr>
		<tr>
			<td>Pis</td>
			<td>{{$apt->pis}}</td>
		</tr>
		<tr>
			<td>Numero de Llits</td>
			<td>{{$apt->numLlits}}</td>
		</tr>
		<tr>
			<td>Numero d'Habitacions</td>
			<td>{{$apt->numHabitacions}}</td>
		</tr>
		<tr>
			<td>Ascensor</td>
			<td>{{$apt->ascensor}}</td>
		</tr>
        <tr>
			<td>Calefacció</td>
			<td>{{$apt->calefaccio}}</td>
		</tr>
		<tr>
			<td>Aire Acondacionat</td>
			<td>{{$apt->aireCondicionat}}</td>
		</tr>
	</tbody>	
    </table>
<div>
@endsection
