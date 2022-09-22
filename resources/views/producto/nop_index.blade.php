@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')

    <div class="container-fluid">
    
        <div class="row">
            
            <div class="col-sm-6">

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos') }}
                                
                            </span>
                           
                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary "  data-placement="left">
                                  Crear Nuevo
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
                        
                        <div class="col-sm-4"> 
                            <form action="{{ route('productos.index') }}" method="GET">                                    
                                <div class="input-group mb-3">
                                    <input type="text" name="busqueda" class="form-control" placeholder="Buscar por Codigo de Barras o Palabras">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
                                </div>
                             </form>
                         </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Agregar</th> 
										<th>Nombre</th>
										<th>Cod Barra</th>
										<th>Marca</th>
										<th>Tienda</th>
										<th>Bodega</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <th>
                                            <button class="btn btn-success" type="submit" id="agregar_producto" name="agregar_producto" value="$producto->id)" onclick="agregar_producto(id_producto.value)">Agregar</button>
                                            </th>
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->cod_barra }}</td>
											<td>{{ $producto->marca->nombre_marca }}</td>
											<td>{{ $producto->tienda->nombre }}</td>
											<td>{{ $producto->bodega->nombre_bodega }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
