<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_mueble') }}
            {{ Form::text('nombre_mueble', $mueble->nombre_mueble, ['class' => 'form-control' . ($errors->has('nombre_mueble') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mueble']) }}
            {!! $errors->first('nombre_mueble', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>