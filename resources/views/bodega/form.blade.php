<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_bodega') }}
            {{ Form::text('nombre_bodega', $bodega->nombre_bodega, ['class' => 'form-control' . ($errors->has('nombre_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Bodega']) }}
            {!! $errors->first('nombre_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>