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
                            <span class="card-title">{{ __('Show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Conductor:</strong>
                            {{ $viaje->id_conductor }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $viaje->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Horasalida:</strong>
                            {{ $viaje->horasalida }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometrajesalida:</strong>
                            {{ $viaje->kilometrajesalida }}
                        </div>
                        <div class="form-group">
                            <strong>Horallegada:</strong>
                            {{ $viaje->horallegada }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometrajellegada:</strong>
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
                            <strong>Codigofactura:</strong>
                            {{ $viaje->codigoFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadgalones:</strong>
                            {{ $viaje->cantidadgalones }}
                        </div>
                        <div class="form-group">
                            <strong>Montototal:</strong>
                            {{ $viaje->montototal }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivovisita:</strong>
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
