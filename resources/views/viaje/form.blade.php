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
            {{ Form::label('fecha', 'Fecha') }}
            {{ Form::date('fecha', $viaje->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora de salida', 'Hora de Salida') }}
            {{ Form::time('horasalida', $viaje->horasalida, ['class' => 'form-control' . ($errors->has('horasalida') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Salida']) }}
            {!! $errors->first('horasalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje de salida') }}
            {{ Form::text('kilometrajesalida', $viaje->kilometrajesalida, ['class' => 'form-control' . ($errors->has('kilometrajesalida') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Salida']) }}
            {!! $errors->first('kilometrajesalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de Llegada', 'Hora de Llegada') }}
            {{ Form::time('horallegada', $viaje->horallegada, ['class' => 'form-control' . ($errors->has('horallegada') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Llegada', 'pattern' => '^\d{2}:\d{2}$', 'title' => 'Ingrese la hora en formato HH:mm']) }}
            {!! $errors->first('horallegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('kilometraje de llegada') }}
            {{ Form::text('kilometrajellegada', $viaje->kilometrajellegada, ['class' => 'form-control' . ($errors->has('kilometrajellegada') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje Llegada']) }}
            {!! $errors->first('kilometrajellegada', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::text('codigoFactura', $viaje->codigoFactura, ['class' => 'form-control' . ($errors->has('codigoFactura') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Factura', 'pattern' => '^[0-9]+$', 'title' => 'Ingres numero valido, debe ser un entero' ]) }}
            {!! $errors->first('codigoFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad de galones') }}
            {{ Form::text('cantidadgalones', $viaje->cantidadgalones, ['class' => 'form-control' . ($errors->has('cantidadgalones') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Galones',  'pattern' => '^-?\d+(\.\d+)?$','title' => 'Ingrese un número válido, puede ser entero o decimal (utilice punto como separador decimal)']) }}
            {!! $errors->first('cantidadgalones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto total') }}
            {{ Form::text('montototal', $viaje->montototal, ['class' => 'form-control' . ($errors->has('montototal') ? ' is-invalid' : ''), 'placeholder' => 'Monto Total', 'pattern' => '^-?\d+(\.\d+)?$','title' => 'Ingrese un número válido, puede ser entero o decimal (utilice punto como separador decimal)']) }}
            {!! $errors->first('montototal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('objetivovisita') }}
            {{ Form::text('objetivovisita', $viaje->objetivovisita, ['class' => 'form-control' . ($errors->has('objetivovisita') ? ' is-invalid' : ''), 'placeholder' => 'Objetivo Visita']) }}
            {!! $errors->first('objetivo visita', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('viajes.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>