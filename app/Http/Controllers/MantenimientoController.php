<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

/**
 * Class MantenimientoController
 * @package App\Http\Controllers
 */
class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimientos = Mantenimiento::paginate();

        return view('mantenimiento.index', compact('mantenimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $mantenimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mantenimiento = new Mantenimiento();
        return view('mantenimiento.create', compact('mantenimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mantenimiento::$rules);

        $mantenimiento = Mantenimiento::create($request->all());

        return redirect()->route('mantenimientos.index')
            ->with('success', 'Mantenimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mantenimiento = Mantenimiento::find($id);

        return view('mantenimiento.show', compact('mantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mantenimiento = Mantenimiento::find($id);

        return view('mantenimiento.edit', compact('mantenimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        request()->validate(Mantenimiento::$rules);

        $mantenimiento->update($request->all());

        return redirect()->route('mantenimientos.index')
            ->with('success', 'Mantenimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mantenimiento = Mantenimiento::find($id)->delete();

        return redirect()->route('mantenimientos.index')
            ->with('success', 'Mantenimiento deleted successfully');
    }
}
