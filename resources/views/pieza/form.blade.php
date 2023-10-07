<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="id_vehiculos">Vehiculo:</label>
            <select name="id_vehiculos" id="id_vehiculos" class="form-control">
                @foreach ($vehiculos as $vehiculos)
                    <option value="{{ $vehiculos->id }}">{{ $vehiculos->Marca }} {{ $vehiculos->Modelo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pieza->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha instalacion') }}
            {{ Form::text('fecha instalacion', $pieza->fechainstalacion, ['class' => 'form-control' . ($errors->has('fecha instalacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha instalacion']) }}
            {!! $errors->first('fecha instalacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje de servicio') }}
            {{ Form::text('kilometraje de servicio', $pieza->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('kilometraje programado km') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje de Servicio']) }}
            {!! $errors->first('kilometraje de servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mantenimiento Programado Km') }}
            {{ Form::text('Mantenimiento Programado Km', $pieza->Kil_para_mant, ['class' => 'form-control' . ($errors->has('Kil_para_mant') ? ' is-invalid' : ''), 'placeholder' => 'Mantenimiento Programado Km']) }}
            {!! $errors->first('Mantenimiento Programado Kmt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado de pieza') }}
            {{ Form::text('estado de pieza', $pieza->estadopieza, ['class' => 'form-control' . ($errors->has('estadopieza') ? ' is-invalid' : ''), 'placeholder' => 'Estado de pieza']) }}
            {!! $errors->first('estado de pieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('piezas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>