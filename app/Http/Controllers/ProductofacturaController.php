<?php

namespace App\Http\Controllers;

use App\Models\Productofactura;
use Illuminate\Http\Request;

/**
 * Class ProductofacturaController
 * @package App\Http\Controllers
 */
class ProductofacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productofacturas = Productofactura::paginate();

        return view('productofactura.index', compact('productofacturas'))
            ->with('i', (request()->input('page', 1) - 1) * $productofacturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productofactura = new Productofactura();
        return view('productofactura.create', compact('productofactura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Productofactura::$rules);

        $productofactura = Productofactura::create($request->all());

        return redirect()->route('productofacturas.index')
            ->with('success', 'Productofactura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productofactura = Productofactura::find($id);

        return view('productofactura.show', compact('productofactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productofactura = Productofactura::find($id);

        return view('productofactura.edit', compact('productofactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Productofactura $productofactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productofactura $productofactura)
    {
        request()->validate(Productofactura::$rules);

        $productofactura->update($request->all());

        return redirect()->route('productofacturas.index')
            ->with('success', 'Productofactura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productofactura = Productofactura::find($id)->delete();

        return redirect()->route('productofacturas.index')
            ->with('success', 'Productofactura deleted successfully');
    }
}
