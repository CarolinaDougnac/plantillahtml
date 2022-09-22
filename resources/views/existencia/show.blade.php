@extends('layouts.app')

@section('template_title')
    {{ $existencia->name ?? 'Show Existencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Existencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('existencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $existencia->producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $existencia->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $existencia->estadoprod->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento:</strong>
                            {{ $existencia->vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Folio Factura:</strong>
                            {{ $existencia->factura->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $existencia->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Balance:</strong>
                            {{ $existencia->precio_balance }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Tienda:</strong>
                            {{ $existencia->cant_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Bodega:</strong>
                            {{ $existencia->cant_bodega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
