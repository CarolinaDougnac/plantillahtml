@extends('layouts.app')

@section('template_title')
    Factura
@endsection

@section('content')
<section class="invoice-list-wrapper">
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="invoice-list-table table">
        <thead>
          <tr>
            <th>#</th>
            <th>N° Folio</th>
										<th>Proveedor</th>
										<th>Estado de la Factactura</th>
										<th>Fecha Emision</th>
										<th>Fecha Reception</th>
                    <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($facturas as $factura)
              <tr>
                  <td>{{ ++$i }}</td>                          
									<td>{{ $factura->folio }}</td>
									<td>{{ $factura->proveedore->nombre_proveedor }}</td>
									<td>{{ $factura->estadofact->estado}}</td>
									<td>{{ $factura->fecha_emision }}</td>
									<td>{{ $factura->fecha_reception }}</td>

                  <td>
                      <form action="{{ route('facturas.destroy',$factura->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('compras.show',$factura->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                          <a class="btn btn-sm btn-success" href="{{ route('compras.edit',$factura->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                      </form>
                  </td>
                  
              </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>
</section>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice-list.js')}}"></script>
@endsection