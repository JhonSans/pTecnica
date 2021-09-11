@extends('layouts.app')

@section('template_title')
    Update Auto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autos.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('autos.update', $auto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('auto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
