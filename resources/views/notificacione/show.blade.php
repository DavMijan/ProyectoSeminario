@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Notificacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notificaciones.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Vehiculos:</strong>
                            {{ $notificacione->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pieza:</strong>
                            {{ $notificacione->id_pieza }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $notificacione->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $notificacione->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
