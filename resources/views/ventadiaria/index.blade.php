@extends('layouts.app')


@section('template_title')
    Venta Diaria
@endsection

@section('content')


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Subir Datos</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Adjuntar excel con lista de productos vendidos
          </p>

          <form action="">
            <input type="file"> 
          </form>

        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('existencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
										<th>Producto</th>
                    <th>Estado</th>
                    <th>Vencimiento</th>
										<th>Total</th>
                    <th>Nuevo Total</th>
										<th>Cantidad en Bodega</th>
										<th>Cantidad en Tienda</th>
										<th>Venta del día</th>
										<th>Reposicion</th>
                    <th>Acción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($existencias as $existencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $existencia->producto->nombre }}</td>
											<td>{{ $existencia->estadoprod->estado }}</td>
											<td>{{ $existencia->vencimiento }}</td>
                      <td>{{ $existencia->cantidad }}</td>
                      <td>{{ $existencia->cantidad -5}}</td>
											<td><input type="number" class="bootstrap-touchspin" style="width: 3em;" value="{{ $existencia->cant_bodega }}" /></td>
											<td><input type="number" class="bootstrap-touchspin" style="width: 3em;" value="{{ $existencia->cant_tienda }}" /></td>
                      <td>5</td>
                      <td>{{ $existencia->cant_tienda}}</td>

                                            <td>
                                                <form action="{{ route('existencias.destroy',$existencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('existencias.show',$existencia->id) }}"><i class="fa fa-fw fa-eye"></i> Actualizar Cantidades</a>
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

  