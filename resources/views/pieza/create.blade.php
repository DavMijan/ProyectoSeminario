@extends('adminlte::page')

@section('title', 'Piezas')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Piezas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('piezas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pieza.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
