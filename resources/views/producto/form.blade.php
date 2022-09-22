<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_barra') }}
            {{ Form::text('cod_barra', $producto->cod_barra, ['class' => 'form-control' . ($errors->has('cod_barra') ? ' is-invalid' : ''), 'placeholder' => 'Cod Barra']) }}
            {!! $errors->first('cod_barra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_marca') }}
            {{ Form::text('id_marca', $producto->id_marca, ['class' => 'form-control' . ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Id Marca']) }}
            {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $producto->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_bodega') }}
            {{ Form::text('id_bodega', $producto->id_bodega, ['class' => 'form-control' . ($errors->has('id_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Id Bodega']) }}
            {!! $errors->first('id_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>