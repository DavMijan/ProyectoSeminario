<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\User;

/**
 * Class VehiculoController
 * @package App\Http\Controllers
 */
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::paginate();

        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', (request()->input('page', 1) - 1) * $vehiculos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = new Vehiculo();
        $users = User::all(['id', 'nombre', 'apellido']); // Obtén la lista de todos los conductores con nombre y apellido
        return view('vehiculo.create', compact('vehiculo', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo = Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        $users = User::all(['id', 'nombre', 'apellido']); // Obtén la lista de todos los conductores con nombre y apellido
        return view('vehiculo.edit', compact('vehiculo', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        // Buscar el vehículo por su ID
        $vehiculo = Vehiculo::find($id);
    
        // Verificar si se encontró el vehículo
        if (!$vehiculo) {
            return redirect()->route('vehiculos.index')->with('error', 'Vehículo no encontrado.');
        }
    
        // Cambiar el estado según el estado actual del vehículo
        $vehiculo->estado = $vehiculo->estado == 0 ? 1 : 0;
        $vehiculo->save();
    
        $message = $vehiculo->estado == 0 ? 'Vehículo marcado como inactivo.' : 'Vehículo marcado como activo.';
    
        return redirect()->route('vehiculos.index')->with('success', $message);
    }
    

    
}
