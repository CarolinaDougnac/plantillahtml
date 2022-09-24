<?php

namespace App\Http\Controllers;

use App\Models\Facturaproducto;
use Illuminate\Http\Request;

/**
 * Class FacturaproductoController
 * @package App\Http\Controllers
 */
class FacturaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturaproductos = Facturaproducto::paginate();

        return view('facturaproducto.index', compact('facturaproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $facturaproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facturaproducto = new Facturaproducto();
        return view('facturaproducto.create', compact('facturaproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Facturaproducto::$rules);

        $facturaproducto = Facturaproducto::create($request->all());

        return redirect()->route('facturaproductos.index')
            ->with('success', 'Facturaproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturaproducto = Facturaproducto::find($id);

        return view('facturaproducto.show', compact('facturaproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturaproducto = Facturaproducto::find($id);

        return view('facturaproducto.edit', compact('facturaproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Facturaproducto $facturaproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facturaproducto $facturaproducto)
    {
        request()->validate(Facturaproducto::$rules);

        $facturaproducto->update($request->all());

        return redirect()->route('facturaproductos.index')
            ->with('success', 'Facturaproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facturaproducto = Facturaproducto::find($id)->delete();

        return redirect()->route('facturaproductos.index')
            ->with('success', 'Facturaproducto deleted successfully');
    }
}
