@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $factura->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Proveedor:</strong>
                            {{ $factura->id_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Fact:</strong>
                            {{ $factura->estado_fact }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $factura->fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Reception:</strong>
                            {{ $factura->fecha_reception }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
