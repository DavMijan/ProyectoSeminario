@extends('adminlte::page')

@section('title', 'Dashboard')

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
                                        
										<th>Id Vehiculos</th>
										<th>Id Pieza</th>
										<th>Tipomantenimiento</th>
										<th>Kil Insta O Mant</th>
										<th>Costomantenimiento</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mantenimientos as $mantenimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mantenimiento->id_vehiculos }}</td>
											<td>{{ $mantenimiento->id_pieza }}</td>
											<td>{{ $mantenimiento->tipomantenimiento }}</td>
											<td>{{ $mantenimiento->Kil_insta_o_mant }}</td>
											<td>{{ $mantenimiento->costomantenimiento }}</td>
											<td>{{ $mantenimiento->estado }}</td>

                                            <td>
                                                <form action="{{ route('mantenimientos.destroy',$mantenimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mantenimientos.show',$mantenimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mantenimientos.edit',$mantenimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $mantenimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
