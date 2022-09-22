@extends('layouts.app')

@section('template_title')
    Productofactura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productofactura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productofacturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Productobasico Id Productobasico</th>
										<th>Factura Id Factura</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productofacturas as $productofactura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productofactura->ProductoBasico_id_productoBasico }}</td>
											<td>{{ $productofactura->Factura_id_factura }}</td>

                                            <td>
                                                <form action="{{ route('productofacturas.destroy',$productofactura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productofacturas.show',$productofactura->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productofacturas.edit',$productofactura->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productofacturas->links() !!}
            </div>
        </div>
    </div>
@endsection
