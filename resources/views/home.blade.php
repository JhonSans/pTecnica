@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}

                    <h5>Bienvenido a este sistema de recopilación de automoviles!</h5>
                    <p>
                    En este sistema podrá:<br/>
                    -Agregar Autos.<br/>
                    -Editar Autos.<br/>
                    -Eliminar Autos.
                    </p>

                    @foreach ($dataArray as $data)
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item active">Dato1</li>
                            <li class="list-group-item">Dato 2</li>
                            <li class="list-group-item">Dato 3</li>
                            <li class="list-group-item">Dato 4</li>
                            <li class="list-group-item">Dato 5</li>
                        </ul>
                    </div> 
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
