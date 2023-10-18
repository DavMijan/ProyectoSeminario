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
            {{ Form::text('nombre', $pieza->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'pattern' => '^[A-Za-z]+$', 'title' => 'Debe contener solo letras', 'required' => 'required']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_instalacion', 'Fecha de Instalación') }}
            {{ Form::date('fechainstalacion', \Carbon\Carbon::parse($pieza->fecha_instalacion)->format('Y-m-d'), ['class' => 'form-control' . ($errors->has('fecha_instalacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Instalación', 'required' => 'required']) }}
            {!! $errors->first('fechainstalacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje de servicio') }}
            {{ Form::text('Kil_insta_o_mant', $pieza->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('Kil_insta_o_mant') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje de Servicio', 'pattern' => '^[1-9]\d*$', 'title' => 'Debe ser un número positivo sin letras', 'required' => 'required']) }}
            {!! $errors->first('Kil_insta_o_mant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{ Form::label('Mantenimiento Programado Km') }}
        {{ Form::text('Kil_para_mant', $pieza->Kil_para_mant, ['class' => 'form-control' . ($errors->has('Kil_para_mant') ? ' is-invalid' : ''), 'placeholder' => 'Mantenimiento Programado Km', 'pattern' => '^[1-9]\d*$', 'title' => 'Debe ser un número positivo sin letras', 'required' => 'required']) }}
        {!! $errors->first('Kil_para_mant', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('estado de pieza') }}
        {{ Form::select('estadopieza', ['Nuevo' => 'Nuevo', 'Usado' => 'Usado'], $pieza->estadopieza, [
            'class' => 'form-control' . ($errors->has('estadopieza') ? ' is-invalid' : ''),
            'placeholder' => 'Selecciona el estado de la pieza',
            'required' => 'required'
        ]) }}
        {!! $errors->first('estadopieza', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('piezas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>