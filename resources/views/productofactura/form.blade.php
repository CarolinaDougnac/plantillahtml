<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ProductoBasico_id_productoBasico') }}
            {{ Form::text('ProductoBasico_id_productoBasico', $productofactura->ProductoBasico_id_productoBasico, ['class' => 'form-control' . ($errors->has('ProductoBasico_id_productoBasico') ? ' is-invalid' : ''), 'placeholder' => 'Productobasico Id Productobasico']) }}
            {!! $errors->first('ProductoBasico_id_productoBasico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Factura_id_factura') }}
            {{ Form::text('Factura_id_factura', $productofactura->Factura_id_factura, ['class' => 'form-control' . ($errors->has('Factura_id_factura') ? ' is-invalid' : ''), 'placeholder' => 'Factura Id Factura']) }}
            {!! $errors->first('Factura_id_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>