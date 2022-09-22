<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Producto;
use App\Models\Existencia;
use App\Models\Proveedore;
use App\Models\Estadofact;
use App\Models\Marca;
use App\Models\Tienda;
use App\Models\Bodega;


class CompraController extends Controller
{
    public function index(Request $request){
        $factura = new Factura();
        $proveedor = Proveedore::pluck('nombre_proveedor','id');
        $estadofact = Estadofact::pluck('estado','id');

    
        $busqueda = $request->busqueda;
        $productos = Producto::where('nombre','like','%'.$busqueda.'%')
                    ->orWhere('cod_barra','like','%'.$busqueda.'%')
                    ->latest('id')
                    ->paginate();
        return view('compra.create', compact('factura','proveedor','estadofact', 'productos'));

    }
}
