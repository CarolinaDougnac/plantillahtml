@extends('layouts.app')

@section('template_title')
    Nueva Factura
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-2">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nueva Factura</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('facturas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('compra.form')
                            

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">@includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nueva Factura</span>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('productos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('producto.index')
                            

                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    
@endsection


