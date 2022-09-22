<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use Illuminate\Http\Request;

/**
 * Class MuebleController
 * @package App\Http\Controllers
 */
class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muebles = Mueble::paginate();

        return view('mueble.index', compact('muebles'))
            ->with('i', (request()->input('page', 1) - 1) * $muebles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mueble = new Mueble();
        return view('mueble.create', compact('mueble'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mueble::$rules);

        $mueble = Mueble::create($request->all());

        return redirect()->route('muebles.index')
            ->with('success', 'Mueble created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mueble = Mueble::find($id);

        return view('mueble.show', compact('mueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mueble = Mueble::find($id);

        return view('mueble.edit', compact('mueble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mueble $mueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mueble $mueble)
    {
        request()->validate(Mueble::$rules);

        $mueble->update($request->all());

        return redirect()->route('muebles.index')
            ->with('success', 'Mueble updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mueble = Mueble::find($id)->delete();

        return redirect()->route('muebles.index')
            ->with('success', 'Mueble deleted successfully');
    }
}
