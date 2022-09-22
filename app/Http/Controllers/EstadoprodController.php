<?php

namespace App\Http\Controllers;

use App\Models\Estadoprod;
use Illuminate\Http\Request;

/**
 * Class EstadoprodController
 * @package App\Http\Controllers
 */
class EstadoprodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoprods = Estadoprod::paginate();

        return view('estadoprod.index', compact('estadoprods'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoprods->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoprod = new Estadoprod();
        return view('estadoprod.create', compact('estadoprod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadoprod::$rules);

        $estadoprod = Estadoprod::create($request->all());

        return redirect()->route('estadoprods.index')
            ->with('success', 'Estadoprod created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoprod = Estadoprod::find($id);

        return view('estadoprod.show', compact('estadoprod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoprod = Estadoprod::find($id);

        return view('estadoprod.edit', compact('estadoprod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadoprod $estadoprod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadoprod $estadoprod)
    {
        request()->validate(Estadoprod::$rules);

        $estadoprod->update($request->all());

        return redirect()->route('estadoprods.index')
            ->with('success', 'Estadoprod updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadoprod = Estadoprod::find($id)->delete();

        return redirect()->route('estadoprods.index')
            ->with('success', 'Estadoprod deleted successfully');
    }
}
