@extends('adminlte::page')

@section('title', 'Mantenimientos')

@section('content_header')
    <h1>Mantenimientos</h1>
    <div class="float-right">
        <a href="{{ route('mantenimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
          {{ __('Crear Nuevo') }}
        </a>
      </div>
@stop
@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <div class="container-fluid">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Vehiculo</th>
										<th>Pieza</th>
										<th>Tipo Mantenimiento</th>
										<th>Kilometraje de Servicio</th>
										<th>Costo Mantenimiento</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mantenimientos as $mantenimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>
                                                @if ($mantenimiento->vehiculo)
                                                {{ $mantenimiento->vehiculo->Marca }} {{ $mantenimiento->vehiculo->Modelo }}
                                                @else
                                                    No hay Vehiculo asociado
                                                @endif
                                            </td>
											<td>{{ $mantenimiento->pieza->nombre }}</td>
											<td>{{ $mantenimiento->tipomantenimiento }}</td>
											<td>{{ $mantenimiento->Kil_insta_o_mant }}</td>
											<td>{{ $mantenimiento->costomantenimiento }}</td>
											<td>{{ $mantenimiento->estado }}</td>

                                            <td>
                                                <form action="{{ route('mantenimientos.destroy',$mantenimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mantenimientos.show',$mantenimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mantenimientos->links() !!}
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