@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('clients.update', $dades_client->dniClient) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
                <label for="dniClient">DNI</label>
				<input type="text" class="form-control" name="dniClient" value="{{ $dades_client->dniClient }}" />
			</div>
			<div class="form-group">           
				<label for="nomCognoms">Nom i Cognoms</label>
				<input type="text" class="form-control" name="nomCognoms" value="{{ $dades_client->nomCognoms }}"/>
			</div>
			<div class="form-group">           
				<label for="edat">Edat</label>
				<input type="text" class="form-control" name="edat" value="{{ $dades_client->edat }}"/>
			</div>
			<div class="form-group">           
				<label for="telefon">Telèfon</label>
				<input type="date" class="form-control" name="telefon" value="{{ $dades_client->telefon }}"/>
			</div>
			<div class="form-group">           
				<label for="adreca">Adreça</label>
				<input type="text" class="form-control" name="adreca"  value="{{ $dades_client->adreca }}"/>
			</div>        
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="tel" class="form-control" name="ciutat"  value="{{ $dades_client->ciutat }}"/>
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<input type="tel" class="form-control" name="pais"  value="{{ $dades_client->pais }}"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email"  value="{{ $dades_client->email }}"/>
			</div>
			<div class="form-group">           
				<label for="tipusTarjeta">Treball a distància</label>
				<select name="tipusTarjeta">
					<option value="Dèbit" {{ $dades_client->tipusTarjeta == "Dèbit" ? 'selected' : ''}}>Dèbit</option>
					<option value="Crèdit" {{ $dades_client->tipusTarjeta == "Crèdit" ? 'selected' : ''}}>Crèdit</option>			    
				</select>
			</div>			
			<div class="form-group">           
				<label for="numeroTarjeta">Numero de Tarjeta</label>
				<input type="date" class="form-control" name="numeroTarjeta"  value="{{ $dades_client->numeroTarjeta }}"/>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de Clients</a>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection
