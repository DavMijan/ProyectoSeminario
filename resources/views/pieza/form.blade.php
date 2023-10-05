<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_vehiculos') }}
            {{ Form::text('id_vehiculos', $pieza->id_vehiculos, ['class' => 'form-control' . ($errors->has('id_vehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Id Vehiculos']) }}
            {!! $errors->first('id_vehiculos', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('estadocompra') }}
            {{ Form::text('estadocompra', $pieza->estadocompra, ['class' => 'form-control' . ($errors->has('estadocompra') ? ' is-invalid' : ''), 'placeholder' => 'Estadocompra']) }}
            {!! $errors->first('estadocompra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadopieza') }}
            {{ Form::text('estadopieza', $pieza->estadopieza, ['class' => 'form-control' . ($errors->has('estadopieza') ? ' is-invalid' : ''), 'placeholder' => 'Estadopieza']) }}
            {!! $errors->first('estadopieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $pieza->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>