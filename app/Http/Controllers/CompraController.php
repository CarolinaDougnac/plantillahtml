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
use App\Models\Compra;
use App\Models\Productofactura;

class CompraController extends Controller
{
    public function index()
    {
        $facturas = Factura::paginate();

        return view('compra.index', compact('facturas'))
            ->with('i', (request()->input('page', 1) - 1) * $facturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factura = new Factura();
        $proveedor = Proveedore::pluck('nombre_proveedor','id');
   
        return view('compra.create', compact('factura','proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compra::$rules);

        $compra = Compra::create($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::find($id);
        $productofactura= Productofactura::pluck('ProductoBasico_id_productoBasico', 'Factura_id_factura', 'id');
        $producto= Producto::pluck('nombre','id');

        return view('compra.show', compact('factura','producto','productofactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Factura::find($id);

        return view('compra.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compra $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        request()->validate(Compra::$rules);

        $compra->update($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compra = Compra::find($id)->delete();

        return redirect()->route('compras.index')
            ->with('success', 'Compra deleted successfully');
    }
}

