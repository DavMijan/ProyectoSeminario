<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_vehiculos') }}
            {{ Form::text('id_vehiculos', $mantenimiento->id_vehiculos, ['class' => 'form-control' . ($errors->has('id_vehiculos') ? ' is-invalid' : ''), 'placeholder' => 'No. Vehiculos']) }}
            {!! $errors->first('id_vehiculos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pieza') }}
            {{ Form::text('id_pieza', $mantenimiento->id_pieza, ['class' => 'form-control' . ($errors->has('id_pieza') ? ' is-invalid' : ''), 'placeholder' => 'Id Pieza']) }}
            {!! $errors->first('id_pieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo mantenimiento') }}
            {{ Form::text('tipo mantenimiento', $mantenimiento->tipomantenimiento, ['class' => 'form-control' . ($errors->has('tipo mantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Mantenimiento']) }}
            {!! $errors->first('tipomantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje de Servicio') }}
            {{ Form::text('Kilometraje de Servicio', $mantenimiento->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('Kilometraje de Servicio') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje de Servicio']) }}
            {!! $errors->first('Kilometraje de Servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo mantenimiento') }}
            {{ Form::text('costo mantenimiento', $mantenimiento->costomantenimiento, ['class' => 'form-control' . ($errors->has('costo mantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Costo Mantenimiento']) }}
            {!! $errors->first('costo mantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $mantenimiento->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>