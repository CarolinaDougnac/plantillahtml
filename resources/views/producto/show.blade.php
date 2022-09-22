@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Barra:</strong>
                            {{ $producto->cod_barra }}
                        </div>
                        <div class="form-group">
                            <strong>Id Marca:</strong>
                            {{ $producto->id_marca }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $producto->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bodega:</strong>
                            {{ $producto->id_bodega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
