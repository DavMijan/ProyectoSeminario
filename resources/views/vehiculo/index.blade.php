@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vehiculos</h1>
    <div class="float-right">
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
          {{ __('Crear Nuevo') }}
        </a>
      </div>
@stop

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Tipo vehiculo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Año</th>
                                    <th>Kilometraje</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehiculos as $vehiculo)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $vehiculo->TipoVehiculo }}</td>
                                        <td>{{ $vehiculo->Marca }}</td>
                                        <td>{{ $vehiculo->Modelo }}</td>
                                        <td>{{ $vehiculo->Año }}</td>
                                        <td>{{ $vehiculo->Kilometraje }}</td>
                                        <td>{{ $vehiculo->Estado }}</td>

                                        <td>
                                            <form action="{{ route('vehiculos.destroy',$vehiculo->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show',$vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit',$vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $vehiculos->links() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">

@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
    <script>
    $('#example').DataTable({
        responsive:true
    });
    </script>
@stop




