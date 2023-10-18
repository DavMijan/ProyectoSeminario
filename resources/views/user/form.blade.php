<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $user->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'pattern' => '^[A-Za-z]+$', 'title' => 'Solo se permiten letras','required'=>'required']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $user->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido', 'pattern' => '^[A-Za-z]+$', 'title' => 'Solo se permiten letras','required'=>'required']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $user->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad', 'pattern' => '^(?:1[8-9]|[2-9][0-9])$', 'title' => 'La edad debe ser de 18 o mayor', 'required'=>'required']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email', 'pattern' => '^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$','required'=>'required'])}}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña', 'pattern' => '^(?=.*[A-Z])(?=.*\d).{8,}$', 'title' => 'La contraseña debe tener 8 caracteres, una mayúscula y números','required'=>'required']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route ('users.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>