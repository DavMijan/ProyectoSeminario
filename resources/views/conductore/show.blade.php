@extends('layouts.app')

@section('template_title')
    {{ $conductore->name ?? "{{ __('Show') Conductore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Conductore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conductores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conductore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $conductore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $conductore->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Vehiculos:</strong>
                            {{ $conductore->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $conductore->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
