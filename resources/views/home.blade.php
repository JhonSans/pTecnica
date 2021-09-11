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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
