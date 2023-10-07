<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="id_vehiculo">Vehiculo:</label>
            <select name="id_vehiculo" id="id_vehiculo" class="form-control" disabled>
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->Marca }} {{ $vehiculo->Modelo }}</option>
            </select>
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

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>