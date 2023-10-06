<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = [
            'Departamento 1' => ['Municipio 1', 'Municipio 2', 'Municipio 3'],
            'Departamento 2' => ['Municipio 4', 'Municipio 5', 'Municipio 6'],
            // Agrega más departamentos y municipios según tus necesidades
        ];
        $viaje = new Viaje();
        $viaje->id_conductor = Auth::id(); // Establece el ID del conductor autenticado

        // Puedes agregar el ID del conductor autenticado como campo oculto
        $id_conductor_hidden = Auth::id();
    
        $users = User::all(['id', 'nombre', 'apellido']);
        // Asigna los valores seleccionados a las propiedades correspondientes de $viaje
        $ultimoViaje = Viaje::where('id_conductor', $viaje->id_conductor)
        ->orderBy('fecha', 'desc')
        ->first();
        if ($ultimoViaje) {
            $viaje->kilometrajesalida = $ultimoViaje->kilometrajellegada;
        }
        return view('viaje.create', compact('viaje', 'users','id_conductor_hidden','departamentos' ));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Viaje::$rules);

        $viaje = Viaje::create($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viaje = Viaje::find($id);
        $viaje->id_conductor = Auth::id(); // Establece el ID del conductor autenticado
        $users = User::all(['id', 'nombre', 'apellido']); // Obtén la lista de todos los conductores con nombre y apellido
        
        return view('viaje.show', compact('viaje','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = [
            'Departamento 1' => ['Municipio 1', 'Municipio 2', 'Municipio 3'],
            'Departamento 2' => ['Municipio 4', 'Municipio 5', 'Municipio 6'],
            // Agrega más departamentos y municipios según tus necesidades
        ];
        $viaje->id_conductor = Auth::id(); // Establece el ID del conductor autenticado

        // Puedes agregar el ID del conductor autenticado como campo oculto
        $id_conductor_hidden = Auth::id();
    
        $users = User::all(['id', 'nombre', 'apellido']); $viaje = Viaje::find($id);

        return view('viaje.edit', compact('viaje', 'users','id_conductor_hidden','departamentos' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viaje $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        request()->validate(Viaje::$rules);

        $viaje->update($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $viaje = Viaje::find($id)->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje deleted successfully');
    }
}
