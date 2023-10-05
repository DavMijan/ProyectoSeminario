<?php

namespace App\Http\Controllers;

use App\Models\FacturasGasto;
use Illuminate\Http\Request;

/**
 * Class FacturasGastoController
 * @package App\Http\Controllers
 */
class FacturasGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturasGastos = FacturasGasto::paginate();

        return view('facturas-gasto.index', compact('facturasGastos'))
            ->with('i', (request()->input('page', 1) - 1) * $facturasGastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facturasGasto = new FacturasGasto();
        return view('facturas-gasto.create', compact('facturasGasto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FacturasGasto::$rules);

        $facturasGasto = FacturasGasto::create($request->all());

        return redirect()->route('facturas-gastos.index')
            ->with('success', 'FacturasGasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturasGasto = FacturasGasto::find($id);

        return view('facturas-gasto.show', compact('facturasGasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturasGasto = FacturasGasto::find($id);

        return view('facturas-gasto.edit', compact('facturasGasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FacturasGasto $facturasGasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacturasGasto $facturasGasto)
    {
        request()->validate(FacturasGasto::$rules);

        $facturasGasto->update($request->all());

        return redirect()->route('facturas-gastos.index')
            ->with('success', 'FacturasGasto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facturasGasto = FacturasGasto::find($id)->delete();

        return redirect()->route('facturas-gastos.index')
            ->with('success', 'FacturasGasto deleted successfully');
    }
}
