@extends('layouts.app')

@section('template_title')
    Existencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Existencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('existencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Producto</th>
										<th>Cantidad</th>
										<th>Id Estado</th>
										<th>Vencimiento</th>
										<th>Id Factura</th>
										<th>Precio Venta</th>
										<th>Precio Balance</th>
										<th>Cant Tienda</th>
										<th>Cant Bodega</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($existencias as $existencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $existencia->id_producto }}</td>
											<td>{{ $existencia->cantidad }}</td>
											<td>{{ $existencia->id_estado }}</td>
											<td>{{ $existencia->vencimiento }}</td>
											<td>{{ $existencia->id_factura }}</td>
											<td>{{ $existencia->precio_venta }}</td>
											<td>{{ $existencia->precio_balance }}</td>
											<td>{{ $existencia->cant_tienda }}</td>
											<td>{{ $existencia->cant_bodega }}</td>

                                            <td>
                                                <form action="{{ route('existencias.destroy',$existencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('existencias.show',$existencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('existencias.edit',$existencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $existencias->links() !!}
            </div>
        </div>
    </div>
@endsection
