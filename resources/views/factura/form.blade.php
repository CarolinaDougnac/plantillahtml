<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $factura->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_proveedor') }}
            {{ Form::text('id_proveedor', $factura->id_proveedor, ['class' => 'form-control' . ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Id Proveedor']) }}
            {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_fact') }}
            {{ Form::text('estado_fact', $factura->estado_fact, ['class' => 'form-control' . ($errors->has('estado_fact') ? ' is-invalid' : ''), 'placeholder' => 'Estado Fact']) }}
            {!! $errors->first('estado_fact', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_emision') }}
            {{ Form::text('fecha_emision', $factura->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_reception') }}
            {{ Form::text('fecha_reception', $factura->fecha_reception, ['class' => 'form-control' . ($errors->has('fecha_reception') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reception']) }}
            {!! $errors->first('fecha_reception', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>