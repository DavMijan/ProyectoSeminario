<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('No. vehiculos') }}
            {{ Form::text('id_vehiculos', $notificacione->id_vehiculos, ['class' => 'form-control' . ($errors->has('id_vehiculos') ? ' is-invalid' : ''), 'placeholder' => 'No. Vehiculos']) }}
            {!! $errors->first('id_vehiculos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. Pieza') }}
            {{ Form::text('id_pieza', $notificacione->id_pieza, ['class' => 'form-control' . ($errors->has('No. Pieza') ? ' is-invalid' : ''), 'placeholder' => 'id_pieza']) }}
            {!! $errors->first('id_pieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $notificacione->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $notificacione->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>