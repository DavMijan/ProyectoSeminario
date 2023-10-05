@extends('layouts.app')

@section('template_title')
    {{ $notificacione->name ?? "{{ __('Mostrar') Notificaciones" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Notificaciones</span>
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
