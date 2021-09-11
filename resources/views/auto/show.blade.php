@extends('layouts.app')

@section('template_title')
    {{ $auto->name ?? 'Show Auto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $auto->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $auto->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            ${{ $auto->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
