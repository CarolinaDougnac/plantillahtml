<?php

namespace App\Http\Controllers;

use App\Models\Estadofact;
use Illuminate\Http\Request;

/**
 * Class EstadofactController
 * @package App\Http\Controllers
 */
class EstadofactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadofacts = Estadofact::paginate();

        return view('estadofact.index', compact('estadofacts'))
            ->with('i', (request()->input('page', 1) - 1) * $estadofacts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadofact = new Estadofact();
        return view('estadofact.create', compact('estadofact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadofact::$rules);

        $estadofact = Estadofact::create($request->all());

        return redirect()->route('estadofacts.index')
            ->with('success', 'Estadofact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadofact = Estadofact::find($id);

        return view('estadofact.show', compact('estadofact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadofact = Estadofact::find($id);

        return view('estadofact.edit', compact('estadofact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadofact $estadofact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadofact $estadofact)
    {
        request()->validate(Estadofact::$rules);

        $estadofact->update($request->all());

        return redirect()->route('estadofacts.index')
            ->with('success', 'Estadofact updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadofact = Estadofact::find($id)->delete();

        return redirect()->route('estadofacts.index')
            ->with('success', 'Estadofact deleted successfully');
    }
}
