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
                            <span class="card-title">{{ __('Mostrar') }} Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $vehiculo->id_conductor }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo vehiculo:</strong>
                            {{ $vehiculo->TipoVehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $vehiculo->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $vehiculo->Año }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $vehiculo->Kilometraje }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $vehiculo->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
