<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#departamento').on('change', function () {
            var selectedDepartamento = $(this).val();
            var municipios = {!! json_encode($departamentos) !!}[selectedDepartamento];
            
            $('#municipio').empty();
            $.each(municipios, function (index, municipio) {
                $('#municipio').append('<option value="' + municipio + '">' + municipio + '</option>');
            });
        });
    });
</script>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="id_conductor">Conductor:</label>
            <select name="id_conductor" id="id_conductor" class="form-control" disabled>
                <option value="{{ Auth::id() }}">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</option>
            </select>
        </div>
        
        <!-- Campo oculto para el id_conductor -->
        <input type="hidden" name="id_conductor" value="{{ $id_conductor_hidden }}">        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $viaje->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora de salida') }}
            {{ Form::text('hora de salida', $viaje->horasalida, ['class' => 'form-control' . ($errors->has('hora de salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('hora de salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje de salida') }}
            {{ Form::text('kilometraje de salida', $viaje->kilometrajesalida, ['class' => 'form-control' . ($errors->has('kilometraje de salida') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Salida']) }}
            {!! $errors->first('kilometraje de salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de Llegada') }}
            {{ Form::text('Hora de Llegada', $viaje->horallegada, ['class' => 'form-control' . ($errors->has('Hora de Llegada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Llegada']) }}
            {!! $errors->first('Hora de Llegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje de llegada') }}
            {{ Form::text('kilometraje de llegada', $viaje->kilometrajellegada, ['class' => 'form-control' . ($errors->has('kilometraje de llegada') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Llegada']) }}
            {!! $errors->first('kilometraje de llegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <select name="departamento" id="departamento" class="form-control">
                <option value="">Selecciona un departamento</option>
                @foreach ($departamentos as $departamento => $municipios)
                    <option value="{{ $departamento }}">{{ $departamento }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="municipio">Municipio:</label>
            <select name="municipio" id="municipio" class="form-control">
                <option value="">Selecciona un Municipio</option>
                <!-- Los municipios se cargarán dinámicamente aquí -->
            </select>
        </div>
        
        
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $viaje->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo de Factura') }}
            {{ Form::text('codigo de Factura', $viaje->codigoFactura, ['class' => 'form-control' . ($errors->has('codigo de Factura') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Factura']) }}
            {!! $errors->first('codigo de Factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad de galones') }}
            {{ Form::text('cantidad de galones', $viaje->cantidadgalones, ['class' => 'form-control' . ($errors->has('cantidad galones') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Galones']) }}
            {!! $errors->first('cantidadgalones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto total') }}
            {{ Form::text('monto total', $viaje->montototal, ['class' => 'form-control' . ($errors->has('monto total') ? ' is-invalid' : ''), 'placeholder' => 'Monto Total']) }}
            {!! $errors->first('monto total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('objetivo visita') }}
            {{ Form::text('objetivo visita', $viaje->objetivovisita, ['class' => 'form-control' . ($errors->has('objetivo visita') ? ' is-invalid' : ''), 'placeholder' => 'Objetivo Visita']) }}
            {!! $errors->first('objetivo visita', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('viajes.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>