<div class="box box-info padding-1">

    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tienda->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mueble') }}
            {{ Form::select('id_mueble', $muebles, $tienda->id_mueble, ['class' => 'form-control' . ($errors->has('id_mueble') ? ' is-invalid' : ''), 'placeholder' => 'Mueble']) }}
            {!! $errors->first('id_mueble', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel') }}
            {{ Form::select('id_nivel', $niveles, $tienda->id_nivel, ['class' => 'form-control' . ($errors->has('id_nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('id_nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Posicion') }}
            {{ Form::select('id_posicion', $posiciones, $tienda->id_posicion, ['class' => 'form-control' . ($errors->has('id_posicion') ? ' is-invalid' : ''), 'placeholder' => 'Posicion']) }}
            {!! $errors->first('id_posicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>