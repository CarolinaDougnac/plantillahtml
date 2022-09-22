<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_producto') }}
            {{ Form::text('id_producto', $existencia->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $existencia->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $existencia->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vencimiento') }}
            {{ Form::text('vencimiento', $existencia->vencimiento, ['class' => 'form-control' . ($errors->has('vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Vencimiento']) }}
            {!! $errors->first('vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_factura') }}
            {{ Form::text('id_factura', $existencia->id_factura, ['class' => 'form-control' . ($errors->has('id_factura') ? ' is-invalid' : ''), 'placeholder' => 'Id Factura']) }}
            {!! $errors->first('id_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $existencia->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_balance') }}
            {{ Form::text('precio_balance', $existencia->precio_balance, ['class' => 'form-control' . ($errors->has('precio_balance') ? ' is-invalid' : ''), 'placeholder' => 'Precio Balance']) }}
            {!! $errors->first('precio_balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_tienda') }}
            {{ Form::text('cant_tienda', $existencia->cant_tienda, ['class' => 'form-control' . ($errors->has('cant_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Cant Tienda']) }}
            {!! $errors->first('cant_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_bodega') }}
            {{ Form::text('cant_bodega', $existencia->cant_bodega, ['class' => 'form-control' . ($errors->has('cant_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Cant Bodega']) }}
            {!! $errors->first('cant_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>