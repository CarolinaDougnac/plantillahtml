@extends('layouts.app')

@section('template_title')
    {{ $estadoprod->name ?? 'Show Estadoprod' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estadoprod</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estadoprods.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estadoprod->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
