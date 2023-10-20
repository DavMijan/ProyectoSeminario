@extends('adminlte::page')

@section('title', 'Piezas')

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
                            <span class="card-title">{{ __('Mostrar') }} Piezas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('piezas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Vehiculos:</strong>
                            {{ $pieza->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pieza->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha instalacion:</strong>
                            {{ $pieza->fechainstalacion }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje de Servicio:</strong>
                            {{ $pieza->Kil_insta_o_mant }}
                        </div>
                        <div class="form-group">
                            <strong>Mantenimiento Programado Km:</strong>
                            {{ $pieza->Kil_para_mant }}
                        </div>
                        <div class="form-group">
                            <strong>Estado de pieza:</strong>
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
