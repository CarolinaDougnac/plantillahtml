@extends('layouts.app')

@section('template_title')
    {{ $tienda->name ?? 'Show Tienda' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tienda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiendas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tienda->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Mueble:</strong>
                            {{ $tienda->mueble->nombre_mueble }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $tienda->nivele->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Posicion:</strong>
                            {{ $tienda->posicione->posicion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
