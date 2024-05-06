@extends('disseny')
@section('content')
<div class="card mt-5">
<div class="card-header">
    Afegeix un nou treballador
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
    <form method="post" action="/apartaments">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="codiUnic">Codi Únic</label>
            <input type="text" class="form-control" name="codiUnic"/>
        </div>
        <div class="form-group">           
            <label for="referencia">Referencia</label>
            <input type="text" class="form-control" name="referencia"/>
        </div>
        <div class="form-group">           
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat"/>
        </div>
        <div class="form-group">           
            <label for="barri">Barri</label>
            <input type="text" class="form-control" name="barri"/>
        </div>
        <div class="form-group">           
            <label for="nomCarrer">Nom Carrer</label>
            <input type="text" class="form-control" name="nomCarrer"/>
        </div>        
        <div class="form-group">
            <label for="numCarrer">Num Carrer</label>
            <input type="number" class="form-control" name="numCarrer"/>
        </div>
        <div class="form-group">
            <label for="pis">Pis</label>
            <input type="number" class="form-control" name="pis"/>
        </div>
        <div class="form-group">
            <label for="numLlits">Numero de Llits</label>
            <input type="number" class="form-control" name="numLlits"/>
        </div>
        <div class="form-group">
            <label for="numHabitacions">Numero d'Habitacions</label>
            <input type="number" class="form-control" name="numHabitacions"/>
        </div>
        <div class="form-group">           
            <label for="ascensor">Ascensor</label>
            <select name="ascensor">
                <option value="si">Si</option>
                <option value="no">No</option>
			</select>
        </div>
        <div class="form-group">           
            <label for="calefaccio">Calefacció</label>
            <select name="calefaccio">
                <option value="Elèctrica">Elèctrica</option>
                <option value="Gas Natural">Gas Natural</option>		
                <option value="Butá">Butá</option>    
			</select>
        </div> 
        <div class="form-group">           
            <label for="aireCondicionat">Aire Acondacionat</label>
            <select name="aireCondicionat">
                <option value="si">Si</option>
                <option value="no">No</option>
			</select>
        </div> 
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
    </div>
</div>
@endsection