@extends('adminlte::page')

@section('title', 'Notificaciones')

@section('content_header')
    <h1>Notificaciones</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Notificaciones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notificaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('notificacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
