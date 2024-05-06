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
    <form method="post" action="/usuaris">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">           
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="tipus">Tipus</label>
            <input type="number" class="form-control" name="tipus"/>
        </div>
        <div class="form-group">       
            <label for="horaEntrada">Hora d'entrada</label>
            <input type="text" class="form-control" name="horaEntrada"/>
        </div>
        <div class="form-group">           
            <label for="horaSortida">Hora de sortida</label>
            <input type="text" class="form-control" name="horaSortida"/>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    </div>
</div>
@endsection