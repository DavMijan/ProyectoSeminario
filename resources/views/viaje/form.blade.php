<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_conductores') }}
            {{ Form::text('id_conductores', $viaje->id_conductores, ['class' => 'form-control' . ($errors->has('id_conductores') ? ' is-invalid' : ''), 'placeholder' => 'Id Conductores']) }}
            {!! $errors->first('id_conductores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $viaje->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horasalida') }}
            {{ Form::text('horasalida', $viaje->horasalida, ['class' => 'form-control' . ($errors->has('horasalida') ? ' is-invalid' : ''), 'placeholder' => 'Horasalida']) }}
            {!! $errors->first('horasalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometrajesalida') }}
            {{ Form::text('kilometrajesalida', $viaje->kilometrajesalida, ['class' => 'form-control' . ($errors->has('kilometrajesalida') ? ' is-invalid' : ''), 'placeholder' => 'Kilometrajesalida']) }}
            {!! $errors->first('kilometrajesalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horallegada') }}
            {{ Form::text('horallegada', $viaje->horallegada, ['class' => 'form-control' . ($errors->has('horallegada') ? ' is-invalid' : ''), 'placeholder' => 'Horallegada']) }}
            {!! $errors->first('horallegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometrajellegada') }}
            {{ Form::text('kilometrajellegada', $viaje->kilometrajellegada, ['class' => 'form-control' . ($errors->has('kilometrajellegada') ? ' is-invalid' : ''), 'placeholder' => 'Kilometrajellegada']) }}
            {!! $errors->first('kilometrajellegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_lugares') }}
            {{ Form::text('id_lugares', $viaje->id_lugares, ['class' => 'form-control' . ($errors->has('id_lugares') ? ' is-invalid' : ''), 'placeholder' => 'Id Lugares']) }}
            {!! $errors->first('id_lugares', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_facturas_gastos') }}
            {{ Form::text('id_facturas_gastos', $viaje->id_facturas_gastos, ['class' => 'form-control' . ($errors->has('id_facturas_gastos') ? ' is-invalid' : ''), 'placeholder' => 'Id Facturas Gastos']) }}
            {!! $errors->first('id_facturas_gastos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('objetivovisita') }}
            {{ Form::text('objetivovisita', $viaje->objetivovisita, ['class' => 'form-control' . ($errors->has('objetivovisita') ? ' is-invalid' : ''), 'placeholder' => 'Objetivovisita']) }}
            {!! $errors->first('objetivovisita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $viaje->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>