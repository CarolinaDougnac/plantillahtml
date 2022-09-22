<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tienda->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_mueble') }}
            {{ Form::text('id_mueble', $tienda->id_mueble, ['class' => 'form-control' . ($errors->has('id_mueble') ? ' is-invalid' : ''), 'placeholder' => 'Id Mueble']) }}
            {!! $errors->first('id_mueble', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_nivel') }}
            {{ Form::text('id_nivel', $tienda->id_nivel, ['class' => 'form-control' . ($errors->has('id_nivel') ? ' is-invalid' : ''), 'placeholder' => 'Id Nivel']) }}
            {!! $errors->first('id_nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_posicion') }}
            {{ Form::text('id_posicion', $tienda->id_posicion, ['class' => 'form-control' . ($errors->has('id_posicion') ? ' is-invalid' : ''), 'placeholder' => 'Id Posicion']) }}
            {!! $errors->first('id_posicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>