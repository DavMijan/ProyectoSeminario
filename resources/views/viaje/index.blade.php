@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mantenimientos</h1>
    <div class="float-right">
        <a href="{{ route('viajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
          {{ __('Create New') }}
        </a>
      </div>
@stop

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <div class="container-fluid">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Conductor</th>
										<th>Fecha</th>
										<th>Horasalida</th>
										<th>Kilometrajesalida</th>
										<th>Horallegada</th>
										<th>Kilometrajellegada</th>
										<th>Departamento</th>
										<th>Municipio</th>
										<th>Direccion</th>
										<th>Codigofactura</th>
										<th>Cantidadgalones</th>
										<th>Montototal</th>
										<th>Objetivovisita</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viajes as $viaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $viaje->id_conductor }}</td>
											<td>{{ $viaje->fecha }}</td>
											<td>{{ $viaje->horasalida }}</td>
											<td>{{ $viaje->kilometrajesalida }}</td>
											<td>{{ $viaje->horallegada }}</td>
											<td>{{ $viaje->kilometrajellegada }}</td>
											<td>{{ $viaje->departamento }}</td>
											<td>{{ $viaje->municipio }}</td>
											<td>{{ $viaje->direccion }}</td>
											<td>{{ $viaje->codigoFactura }}</td>
											<td>{{ $viaje->cantidadgalones }}</td>
											<td>{{ $viaje->montototal }}</td>
											<td>{{ $viaje->objetivovisita }}</td>
											<td>{{ $viaje->estado }}</td>

                                            <td>
                                                <form action="{{ route('viajes.destroy',$viaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('viajes.show',$viaje->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('viajes.edit',$viaje->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $viajes->links() !!}
            </div>
        </div>
    </div>
@endsection

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