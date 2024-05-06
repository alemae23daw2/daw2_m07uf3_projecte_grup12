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
			<td>Nom</td>
			<td>{{$user->name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$user->email}}</td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td>{{$user->tipus}}</td>
		</tr>
		<tr>
			<td>Hora d'entrada</td>
			<td>{{$user->horaEntrada}}</td>
		</tr>
		<tr>
			<td>Hora de sortida</td>
			<td>{{$user->horaSortida}}</td>
		</tr>
	</tbody>	
    </table>
<div>
@endsection
