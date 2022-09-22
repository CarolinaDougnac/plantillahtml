<?php

namespace App\Http\Controllers;

use App\Models\Existencia;
use App\Models\Producto;
use App\Models\Estadoprod;
use App\Models\Factura;

use Illuminate\Http\Request;

/**
 * Class ExistenciaController
 * @package App\Http\Controllers
 */
class ExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $existencias = Existencia::paginate();

        return view('existencia.index', compact('existencias'))
            ->with('i', (request()->input('page', 1) - 1) * $existencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $existencia = new Existencia();
        $producto = Producto::pluck('nombre','id');
        $estadoprod = Estadoprod::pluck('estado','id');
        $factura = Factura::pluck('folio','id');


        return view('existencia.create', compact('existencia','producto','estadoprod','factura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Existencia::$rules);

        $existencia = Existencia::create($request->all());

        return redirect()->route('existencias.index')
            ->with('success', 'Existencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $existencia = Existencia::find($id);

        return view('existencia.show', compact('existencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $existencia = Existencia::find($id);
        $producto = Producto::pluck('nombre','id');
        $estadoprod = Estadoprod::pluck('estado','id');
        $factura = Factura::pluck('folio','id');

        return view('existencia.edit', compact('existencia','producto','estadoprod','factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Existencia $existencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Existencia $existencia)
    {
        request()->validate(Existencia::$rules);

        $existencia->update($request->all());

        return redirect()->route('existencias.index')
            ->with('success', 'Existencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $existencia = Existencia::find($id)->delete();

        return redirect()->route('existencias.index')
            ->with('success', 'Existencia deleted successfully');
    }
}
