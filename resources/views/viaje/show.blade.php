@extends('adminlte::page')

@section('title', 'Viajes')

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
                            <span class="card-title">{{ __('Mostrar') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $viaje->id_conductor }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $viaje->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $viaje->horasalida }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje Salida:</strong>
                            {{ $viaje->kilometrajesalida }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Llegada:</strong>
                            {{ $viaje->horallegada }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje Llegada:</strong>
                            {{ $viaje->kilometrajellegada }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $viaje->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $viaje->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $viaje->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Factura:</strong>
                            {{ $viaje->codigoFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Galones:</strong>
                            {{ $viaje->cantidadgalones }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Total:</strong>
                            {{ $viaje->montototal }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivo Visita:</strong>
                            {{ $viaje->objetivovisita }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $viaje->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
