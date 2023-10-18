<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_vehiculos') }}
            {{ Form::text('id_vehiculos', $mantenimiento->id_vehiculos, ['class' => 'form-control' . ($errors->has('id_vehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Id Vehiculos']) }}
            {!! $errors->first('id_vehiculos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <!-- Campo oculto para el id_conductor -->
        <input type="hidden" name="id_vehiculos" value="{{ $vehiculo->id }}">  

        <div class="form-group">
            <label for="id_pieza">Piezas:</label>
            <select name="id_pieza" id="id_pieza" class="form-control">
                @foreach ($piezas as $piezas)
                    <option value="{{ $piezas->id }}">{{ $piezas->nombre }} {{ $piezas->Kil_insta_o_mant }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('tipo mantenimiento') }}
            {{ Form::text('tipomantenimiento', $mantenimiento->tipomantenimiento, ['class' => 'form-control' . ($errors->has('tipomantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Mantenimiento', 'required'=>'required']) }}
            {!! $errors->first('tipomantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje de Servicio') }}
            {{ Form::text('Kil_insta_o_mant', $mantenimiento->Kil_insta_o_mant, ['class' => 'form-control' . ($errors->has('Kil_insta_o_mant') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje de Servicio', 'pattern' => '^[0-9]+$', 'title' => 'Ingrese numero valido, debe ser un entero', 'required'=>'required']) }}
            {!! $errors->first('Kilometraje de Servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo mantenimiento') }}
            {{ Form::text('costomantenimiento', $mantenimiento->costomantenimiento, ['class' => 'form-control' . ($errors->has('costomantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Costo Mantenimiento', 'pattern' => '^[0-9]+$', 'title' => 'Ingrese numero valido, debe ser un entero', 'required'=>'required' ]) }}
            {!! $errors->first('costomantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>