@extends('layouts.app')

@section('template_title')
    {{ $nivele->name ?? 'Show Nivele' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nivele</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('niveles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $nivele->nivel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
