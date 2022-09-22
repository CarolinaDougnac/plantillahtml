@extends('layouts.app')

@section('template_title')
    {{ $bodega->name ?? 'Show Bodega' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bodega</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodegas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Bodega:</strong>
                            {{ $bodega->nombre_bodega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
