<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pieza;
use App\Models\Notificacione;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::allows('admins')) {
            $mantenimientos = Mantenimiento::paginate();
        } elseif (Gate::allows('standard')) {
            $idbuscar = Auth::id();
            $vehiculo = Vehiculo::select('id', 'Marca', 'Modelo')
            ->where('id_conductor', $idbuscar)
            ->first();
            $mantenimientos = Mantenimiento::where('id_vehiculos', $vehiculo->id)->paginate();
        } else {
            abort(403); // Mostrar un error 403 si el usuario no tiene permiso
        }
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
        $idbuscar = Auth::id();
        $vehiculo = Vehiculo::where('id_conductor', $idbuscar)->first();
        $vehiculo = Vehiculo::select('id', 'Marca', 'Modelo')
        ->where('id_conductor', $idbuscar)
        ->first();
        $piezas = [];
        if ($vehiculo) {
        $piezas = Pieza::select('id', 'nombre', 'Kil_insta_o_mant', 'Kil_para_mant')
            ->where('id_vehiculos', $vehiculo->id)
            ->get();
    }

        return view('mantenimiento.create', compact('mantenimiento', 'vehiculo','piezas'));
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
 
        Pieza::where('id', $mantenimiento->id_pieza)->update([
            'Kil_insta_o_mant' => $mantenimiento->Kil_insta_o_mant,
            // Agrega más campos y valores aquí si es necesario
        ]);
        
        $alertas = Notificacione::select('id')
        ->where('id_pieza', $mantenimiento->id_pieza)
        ->get();
    
    foreach ($alertas as $alerta) {
        $alerta->delete();
    }

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
