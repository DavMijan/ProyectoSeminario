@extends('layouts.app')

@section('template_title')
    {{ $pieza->name ?? "{{ __('MOstrar') Pieza" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pieza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('piezas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Vehiculos:</strong>
                            {{ $pieza->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pieza->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainstalacion:</strong>
                            {{ $pieza->fechainstalacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocompra:</strong>
                            {{ $pieza->estadocompra }}
                        </div>
                        <div class="form-group">
                            <strong>Estadopieza:</strong>
                            {{ $pieza->estadopieza }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pieza->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
