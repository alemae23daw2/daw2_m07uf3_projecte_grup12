@extends('disseny')
@section('content')
<div class="card mt-5">
<div class="card-header">
    Afegeix un nou llogament
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
    <form method="post" action="/lloga">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="dniClient">DNI del Client</label>
            <input type="text" class="form-control" name="dniClient"/>
        </div>
        <div class="form-group">           
            <label for="codiUnic">Codi Ùnic de l'Apartament</label>
            <input type="text" class="form-control" name="codiUnic"/>
        </div>
        <div class="form-group">           
            <label for="dataInici">Data Inici</label>
            <input type="date" class="form-control" name="dataInici"/>
        </div>
        <div class="form-group">           
            <label for="horaInici">Hora Inici</label>
            <input type="text" class="form-control" name="horaInici"/>
        </div>
        <div class="form-group">           
            <label for="dataFinal">Data Final</label>
            <input type="date" class="form-control" name="dataFinal"/>
        </div>        
        <div class="form-group">
            <label for="horaFinal">Hora Final</label>
            <input type="text" class="form-control" name="horaFinal"/>
        </div>
        <div class="form-group">
            <label for="lliuramentClaus">Lloc de lliurament de les claus</label>
            <input type="text" class="form-control" name="lliuramentClaus"/>
        </div>
        <div class="form-group">
            <label for="devolucioClaus">Lloc de devolució de les claus</label>
            <input type="text" class="form-control" name="devolucioClaus"/>
        </div>
        <div class="form-group">
            <label for="preuPerDia">Preu per Dia</label>
            <input type="number" class="form-control" name="preuPerDia"/>
        </div>
        <div class="form-group">           
            <label for="diposit">Dipòsit</label>
            <select name="diposit">
                <option value="si">Si</option>
                <option value="no">No</option>			    
			</select>
        </div>
        <div class="form-group">
            <label for="dipositQuantitat">Quantitat dipòsit</label>
            <input type="number" class="form-control" name="dipositQuantitat"/>
        </div>
        <div class="form-group">           
            <label for="tipusAsseguranca">Tipus d'assegurança</label>
            <select name="tipusAsseguranca">
                <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
                <option value="Franquíca fins 500 Euros">Franquíca fins 500 Euros</option>
                <option value="Sense franquícia">Sense franquícia</option>
			</select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    </div>
</div>
@endsection