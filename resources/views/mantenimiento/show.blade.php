@extends('adminlte::page')

@section('title', 'Mantenimientos')

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
                            <span class="card-title">{{ __('Ver') }} Mantenimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mantenimientos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>No. Vehiculos:</strong>
                            {{ $mantenimiento->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>No. Pieza:</strong>
                            {{ $mantenimiento->id_pieza }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de mantenimiento:</strong>
                            {{ $mantenimiento->tipomantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje de :</strong>
                            {{ $mantenimiento->Kil_insta_o_mant }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Mantenimiento:</strong>
                            {{ $mantenimiento->costomantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $mantenimiento->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
