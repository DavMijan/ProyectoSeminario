<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

/**
 * Class PiezaController
 * @package App\Http\Controllers
 */
class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('admins')) {
            $piezas = Pieza::paginate();
        } elseif (Gate::allows('standard')) {
            $idbuscar = Auth::id();
            $vehiculo = Vehiculo::select('id', 'Marca', 'Modelo')
            ->where('id_conductor', $idbuscar)
            ->first();
            $piezas = Pieza::where('id_vehiculos', $vehiculo->id)->paginate();
        } else {
            abort(403); // Mostrar un error 403 si el usuario no tiene permiso
        }
        
        return view('pieza.index', compact('piezas'))
            ->with('i', (request()->input('page', 1) - 1) * $piezas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pieza = new Pieza();
        $vehiculos = Vehiculo::all(['id', 'Marca', 'Modelo']);
        return view('pieza.create', compact('pieza', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pieza::$rules);

        $pieza = Pieza::create($request->all());

        return redirect()->route('piezas.index')
            ->with('success', 'Pieza created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pieza = Pieza::find($id);

        return view('pieza.show', compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pieza = Pieza::find($id);
        $vehiculos = Vehiculo::all(['id', 'Marca', 'Modelo']);
        return view('pieza.edit', compact('pieza','vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pieza $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pieza $pieza)
    {
        request()->validate(Pieza::$rules);

        $pieza->update($request->all());

        return redirect()->route('piezas.index')
            ->with('success', 'Pieza updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pieza = Pieza::find($id)->delete();

        return redirect()->route('piezas.index')
            ->with('success', 'Pieza deleted successfully');
    }
}
