<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="id_conductor">Conductor:</label>
            <select name="id_conductor" id="id_conductor" class="form-control">
                @foreach ($users as $users)
                    <option value="{{ $users->id }}">{{ $users->nombre }} {{ $users->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Vehiculo') }}
            {{ Form::text('TipoVehiculo', $vehiculo->TipoVehiculo, ['class' => 'form-control' . ($errors->has('TipoVehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Vehiculo']) }}
            {!! $errors->first('TipoVehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $vehiculo->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $vehiculo->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año') }}
            {{ Form::text('Año', $vehiculo->Año, ['class' => 'form-control' . ($errors->has('Año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('Año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('Kilometraje', $vehiculo->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>