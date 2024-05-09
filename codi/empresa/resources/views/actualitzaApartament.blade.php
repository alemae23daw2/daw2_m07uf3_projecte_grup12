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
        <form method="post" action="{{ route('apartaments.update', $dades_apartament->codiUnic) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
                <label for="codiUnic">Codi Únic</label>
				<input type="text" class="form-control" name="codiUnic" value="{{ $dades_apartament->codiUnic }}" />
			</div>
			<div class="form-group">           
				<label for="referencia">Referencia</label>
				<input type="text" class="form-control" name="referencia" value="{{ $dades_apartament->referencia }}"/>
			</div>
			<div class="form-group">           
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat" value="{{ $dades_apartament->ciutat }}"/>
			</div>
			<div class="form-group">           
				<label for="barri">Barri</label>
				<input type="text" class="form-control" name="barri" value="{{ $dades_apartament->barri }}"/>
			</div>
			<div class="form-group">           
				<label for="nomCarrer">Nom Carrer</label>
				<input type="text" class="form-control" name="nomCarrer"  value="{{ $dades_apartament->nomCarrer }}"/>
			</div>        
			<div class="form-group">
				<label for="numCarrer">Numero Carrer</label>
				<input type="number" class="form-control" name="numCarrer"  value="{{ $dades_apartament->numCarrer }}"/>
			</div>
			<div class="form-group">
				<label for="pis">Pis</label>
				<input type="number" class="form-control" name="pis"  value="{{ $dades_apartament->pis }}"/>
			</div>
			<div class="form-group">
				<label for="numLlits">Numero de Llits</label>
				<input type="number" class="form-control" name="numLlits"  value="{{ $dades_apartament->numLlits }}"/>
			</div>
			<div class="form-group">
				<label for="numHabitacions">Numero d'Habitacions'</label>
				<input type="number" class="form-control" name="numHabitacions"  value="{{ $dades_apartament->numHabitacions }}"/>
			</div>
			<div class="form-group">           
				<label for="ascensor">Ascensor</label>
				<select name="ascensor">
					<option value="si" {{ $dades_apartament->ascensor == "si" ? 'selected' : ''}}>Si</option>
					<option value="no" {{ $dades_apartament->ascensor == "no" ? 'selected' : ''}}>No</option>
				</select>
			</div>
			<div class="form-group">           
				<label for="calefaccio">Ascensor</label>
				<select name="calefaccio">
					<option value="Elèctrica" {{ $dades_apartament->calefaccio == "Elèctrica" ? 'selected' : ''}}>Elèctrica</option>
					<option value="Gas Natural" {{ $dades_apartament->calefaccio == "Gas Natural" ? 'selected' : ''}}>Gas Natural</option>
					<option value="Butá" {{ $dades_apartament->calefaccio == "Butá" ? 'selected' : ''}}>Butá</option>
				</select>
			</div>
			<div class="form-group">           
				<label for="aireCondicionat">Aire Acondicionat</label>
				<select name="aireCondicionat">
					<option value="si" {{ $dades_apartament->aireCondicionat == "si" ? 'selected' : ''}}>Si</option>
					<option value="no" {{ $dades_apartament->aireCondicionat == "no" ? 'selected' : ''}}>No</option>
				</select>
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
