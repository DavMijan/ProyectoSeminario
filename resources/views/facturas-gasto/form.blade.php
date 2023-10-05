<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigoFactura') }}
            {{ Form::text('codigoFactura', $facturasGasto->codigoFactura, ['class' => 'form-control' . ($errors->has('codigoFactura') ? ' is-invalid' : ''), 'placeholder' => 'Codigofactura']) }}
            {!! $errors->first('codigoFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $facturasGasto->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadgalones') }}
            {{ Form::text('cantidadgalones', $facturasGasto->cantidadgalones, ['class' => 'form-control' . ($errors->has('cantidadgalones') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadgalones']) }}
            {!! $errors->first('cantidadgalones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montototal') }}
            {{ Form::text('montototal', $facturasGasto->montototal, ['class' => 'form-control' . ($errors->has('montototal') ? ' is-invalid' : ''), 'placeholder' => 'Montototal']) }}
            {!! $errors->first('montototal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $facturasGasto->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('vehiculos.index')}}" class="btn btn-danger">Cancelar</a>

    </div>
</div>