@extends('layouts.app')

@section('template_title')
    {{ $facturasGasto->name ?? "{{ __('Mostrar') Facturas Gasto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Facturas Gasto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas-gastos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigofactura:</strong>
                            {{ $facturasGasto->codigoFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $facturasGasto->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadgalones:</strong>
                            {{ $facturasGasto->cantidadgalones }}
                        </div>
                        <div class="form-group">
                            <strong>Montototal:</strong>
                            {{ $facturasGasto->montototal }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $facturasGasto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
