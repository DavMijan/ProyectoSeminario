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
            {{ Form::label('fechainstalacion') }}
            {{ Form::text('fechainstalacion', $pieza->fechainstalacion, ['class' => 'form-control' . ($errors->has('fechainstalacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechainstalacion']) }}
            {!! $errors->first('fechainstalacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kil_insta_o_mant') }}
            {{ Form::text('Kil_insta_o_mant', $pieza->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('Kil_insta_o_mant') ? ' is-invalid' : ''), 'placeholder' => 'Kil Insta O Mant']) }}
            {!! $errors->first('Kil_insta_o_mant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kil_para_mant') }}
            {{ Form::text('Kil_para_mant', $pieza->Kil_para_mant, ['class' => 'form-control' . ($errors->has('Kil_para_mant') ? ' is-invalid' : ''), 'placeholder' => 'Kil Para Mant']) }}
            {!! $errors->first('Kil_para_mant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadopieza') }}
            {{ Form::text('estadopieza', $pieza->estadopieza, ['class' => 'form-control' . ($errors->has('estadopieza') ? ' is-invalid' : ''), 'placeholder' => 'Estadopieza']) }}
            {!! $errors->first('estadopieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a href="{{ route ('piezas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>