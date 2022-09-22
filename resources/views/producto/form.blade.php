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
            {{ Form::label('Marca') }}
            {{ Form::select('id_marca', $marcas, $producto->id_marca, ['class' => 'form-control' . ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tienda') }}
            {{ Form::select('id_tienda', $tiendas, $producto->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Bodega') }}
            {{ Form::select('id_bodega', $bodegas, $producto->id_bodega, ['class' => 'form-control' . ($errors->has('id_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Bodega']) }}
            {!! $errors->first('id_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>