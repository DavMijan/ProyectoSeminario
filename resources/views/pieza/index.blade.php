@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Piezas</h1>
    <div class="float-right">
        <a href="{{ route('piezas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
          {{ __('Crear Nuevo') }}
        </a>
      </div>
@stop
@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Vehiculos</th>
										<th>Nombre</th>
										<th>Fechainstalacion</th>
										<th>Estadocompra</th>
										<th>Estadopieza</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($piezas as $pieza)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pieza->id_vehiculos }}</td>
											<td>{{ $pieza->nombre }}</td>
											<td>{{ $pieza->fechainstalacion }}</td>
											<td>{{ $pieza->estadocompra }}</td>
											<td>{{ $pieza->estadopieza }}</td>
											<td>{{ $pieza->estado }}</td>

                                            <td>
                                                <form action="{{ route('piezas.destroy',$pieza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('piezas.show',$pieza->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('piezas.edit',$pieza->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $piezas->links() !!}
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
