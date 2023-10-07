<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_vehiculos') }}
            {{ Form::text('id_vehiculos', $mantenimiento->id_vehiculos, ['class' => 'form-control' . ($errors->has('id_vehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Id Vehiculos']) }}
            {!! $errors->first('id_vehiculos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pieza') }}
            {{ Form::text('id_pieza', $mantenimiento->id_pieza, ['class' => 'form-control' . ($errors->has('id_pieza') ? ' is-invalid' : ''), 'placeholder' => 'Id Pieza']) }}
            {!! $errors->first('id_pieza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipomantenimiento') }}
            {{ Form::text('tipomantenimiento', $mantenimiento->tipomantenimiento, ['class' => 'form-control' . ($errors->has('tipomantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Tipomantenimiento']) }}
            {!! $errors->first('tipomantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kil_insta_o_mant') }}
            {{ Form::text('Kil_insta_o_mant', $mantenimiento->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('Kil_insta_o_mant') ? ' is-invalid' : ''), 'placeholder' => 'Kil Insta O Mant']) }}
            {!! $errors->first('Kil_insta_o_mant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costomantenimiento') }}
            {{ Form::text('costomantenimiento', $mantenimiento->costomantenimiento, ['class' => 'form-control' . ($errors->has('costomantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Costomantenimiento']) }}
            {!! $errors->first('costomantenimiento', '<div class="invalid-feedback">:message</div>') !!}
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