@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Notificaciones</h1>
    <div class="float-right">
        <a href="{{ route('notificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
          {{ __('Crear Nuevo') }}
        </a>
      </div>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Notificacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('notificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Vehiculos</th>
										<th>Id Pieza</th>
										<th>Detalle</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notificaciones as $notificacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notificacione->id_vehiculos }}</td>
											<td>{{ $notificacione->id_pieza }}</td>
											<td>{{ $notificacione->detalle }}</td>
											<td>{{ $notificacione->estado }}</td>

                                            <td>
                                                <form action="{{ route('notificaciones.destroy',$notificacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notificaciones.show',$notificacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('notificaciones.edit',$notificacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $notificaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
