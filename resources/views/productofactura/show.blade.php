@extends('layouts.app')

@section('template_title')
    {{ $productofactura->name ?? 'Show Productofactura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Productofactura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productofacturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Productobasico Id Productobasico:</strong>
                            {{ $productofactura->ProductoBasico_id_productoBasico }}
                        </div>
                        <div class="form-group">
                            <strong>Factura Id Factura:</strong>
                            {{ $productofactura->Factura_id_factura }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
