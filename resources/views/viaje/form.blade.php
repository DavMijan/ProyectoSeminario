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
                <!-- Los municipios se cargarán dinámicamente aquí -->
            </select>
        </div>
        
        
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $viaje->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigoFactura') }}
            {{ Form::text('codigoFactura', $viaje->codigoFactura, ['class' => 'form-control' . ($errors->has('codigoFactura') ? ' is-invalid' : ''), 'placeholder' => 'Codigofactura']) }}
            {!! $errors->first('codigoFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadgalones') }}
            {{ Form::text('cantidadgalones', $viaje->cantidadgalones, ['class' => 'form-control' . ($errors->has('cantidadgalones') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadgalones']) }}
            {!! $errors->first('cantidadgalones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montototal') }}
            {{ Form::text('montototal', $viaje->montototal, ['class' => 'form-control' . ($errors->has('montototal') ? ' is-invalid' : ''), 'placeholder' => 'Montototal']) }}
            {!! $errors->first('montototal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('objetivovisita') }}
            {{ Form::text('objetivovisita', $viaje->objetivovisita, ['class' => 'form-control' . ($errors->has('objetivovisita') ? ' is-invalid' : ''), 'placeholder' => 'Objetivovisita']) }}
            {!! $errors->first('objetivovisita', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a href="{{ route ('viajes.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>