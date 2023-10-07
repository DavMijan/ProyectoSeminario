<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pieza;
use App\Models\Notificacione;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::allows('admins')) {
            $viajes = Viaje::paginate();
        } elseif (Gate::allows('standard')) {
            $idbuscar = Auth::id();
            $viajes  = Viaje::where('id_conductor', Auth::id())->paginate();
        } else {
            abort(403); // Mostrar un error 403 si el usuario no tiene permiso
        }
        

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
            
            'Guatemala' => ['Guatemala',
            'Santa Catarina Pinula',
            'San José Pinula',
            'San José del Golfo',
            'Palencia',
            'Chinautla',
            'San Pedro Ayampuc',
            'Mixco',
            'San Pedro Sacatepequez',
            'San Juan Sacatepequez',
            'San Raymundo',
            'Chuarrancho',
            'Fraijanes',
            'Amatitlán',
            'Villa Nueva',
            'Villa Canales',
            'San Miguel Petapa'],
            
            'El Progreso' => ['Guastatoya',
            'Morazán',
            'San Agustín Acasaguastlan',
            'San Cristóbal Acasaguastlan',
            'El Jícaro',
            'Sansare',
            'Sanarate',
            'San Antonio La Paz'],

            'Sacatepéquez' => ['Antigua Guatemala',
            'Jocotenango','Pastores',
            'Sumpango',
            'Santo Domingo Xenacoj',
            'Santiago Sacatepequez',
            'San Bartolomé Milpas Altas',
            'San Lucas Sacatepequez',
            'Santa Lucía Milpas Altas',
            'Magdalena Milpas Altas',
            'Santa María de Jesús',
            'Ciudad Vieja',
            'San Miguel Dueñas',
            'San Juan Alotenango',
            'San Antonio Aguas Calientes',
            'Santa Catarina Barahona'],

            'Chimaltenango' => ['Chimaltenango',
            'San José Poaquil',
            'San Martín Jilotepeque',
            'San Juan Comalapa',
            'Santa Apolonia',
            'Tecpán Guatemala',
            'Patzun',
            'San Miguel Pochuta',
            'Patzicia',
            'Santa Cruz Balanyá',
            'Acatenango',
            'San Pedro Yepocapa',
            'San Andrés Itzapa',
            'Parramos',
            'Zaragoza',
            'El Tejar'],

            'Escuintla' => ['Escuintla',
            'Santa Lucía Cotzumalguapa',
            'La Democracia','Siquinalá',
            'Masagua',
            'Pueblo Nuevo Tiquisate',
            'La Gomera',
            'Guanagazapa',
            'Puerto de San José',
            'Iztapa',
            'Palín',
            'San Vicente Pacaya',
            'Nueva Concepción'],

            'Santa Rosa' => ['Cuilapa',
            'Berberena',
            'San Rosa de Lima',
            'Casillas',
            'San Rafael Las Flores',
            'Oratorio',
            'San Juan TEcuaco',
            'Chiquimulilla',
            'Taxisco',
            'Santa María Ixhuatan',
            'Guazacapán',
            'Santa Cruz Naranjo',
            'Pueblo Nuevo Viñas',
            'Nueva Santa Rosa'],

            'Sololá' => ['Sololá',
            'San José Chacaya',
            'Santa María Visitación',
            'Santa Lucía Utatlán',
            'Nahualá',
            'Santa Catarina Ixtahuacán',
            'Santa Clara La Laguna',
            'Concepción',
            'San Andrés Semetabaj',
            'Panajachel',
            'Santa Catarina Palopó',
            'San Antonio Palopó',
            'San Lucas Tolimán',
            'Santa Cruz La Laguna',
            'San Pablo La Laguna',
            'San Marcos La Laguna',
            'San Juan La Laguna',
            'San Pedro La Laguna',
            'Santiago Atitlán'],

            'Totonicapán' => ['Totonicapán',
            'San Cristóbal Totonicapán',
            'San Francisco El Alto',
            'San Andrés Xecul',
            'Momostenango',
            'Santa María Chiquimula',
            'Santa Lucía La Reforma',
            'San Bartolo Aguas Calientes'],

            'Quetzaltenango' => ['Quetzaltenango',
            'Salcajá',
            'Olintepeque',
            'San Carlos Sija',
            'Sibilia',
            'Cabrican',
            'Cajola',
            'San Miguel Sigüilá',
            'San Juan Ostuncalco',
            'San Mateo',
            'Concepción Chiquirichapa',
            'San Martín Sacatepequez',
            'Almolonga',
            'Cantel',
            'Huitán',
            'Zunil',
            'Colomba',
            'San Francisco La Unión',
            'El Palmar',
            'Coatepeque',
            'Génova',
            'Flores Costa Cuca',
            'La Esperanza',
            'Palestina de los Altos'],

            'Suchitepéquez' => ['Mazatenango',
            'Cuyotenango',
            'San Francisco Zapotitlán',
            'San Bernardino',
            'San José El Ídolo',
            'Santo Domingo Suchitepequez',
            'San Lorenzo',
            'Samayac',
            'San Pablo Jocopilas',
            'San Antonio Suchitepéquez',
            'San Miguel Panán',
            'San Gabriel',
            'Chicacao',
            'Patulul',
            'Santa Bárbara',
            'San Juan Bautista',
            'Santo Tomás La Unión',
            'Zunilito',
            'Pueblo Nuevo Suchitepéquez',
            'Río Bravo'],

            'Retalhuelu' => ['Retalhuelu',
            'San Sebastián',
            'Santa Cruz Mulúa',
            'San Martín Zapotitlán',
            'San Felipe Retalhuleu',
            'San Andrés Villa Seca',
            'Champerico',
            'Nuevo San Carlos',
            'El Asintal'
            ],

            'San Marcos' => ['San Marcos',
            'San Pedro Sacatepéquez',
            'Comitancillo',
            'San Antonio Sacatepéquez',
            'San Miguel Ixtahuacan',
            'Concepción Tutuapa',
            'Tacaná',
            'Sibinal',
            'Tajumulco',
            'Tejutla',
            'San Rafael Pié de la Cuesta',
            'Nuevo Progreso',
            'El Tumbador',
            'San José El Rodeo',
            'Malacatán',
            'Catarina',
            'Ayutla',
            'Ocos',
            'San Pablo',
            'El Quetzal',
            'La Reforma',
            'Pajapita',
            'Ixchiguan',
            'San José Ojetenán',
            'San Cristóbal Cucho',
            'Sipacapa',
            'Esquipulas Palo Gordo',
            'Río Blanco',
            'San Lorenzo'],

            'Huehuetenango' => ['Huehuetenango',
            'Chiantla',
            'Malacatancito',
            'Cuilco',
            'Nentón',
            'San Pedro Necta',
            'Jacaltenango',
            'San Pedro Soloma',
            'San Ildelfonso Ixtahuacán',
            'Santa Bárbara',
            'La Libertad',
            'La Democracia',
            'San Miguel Acatán',
            'San Rafael La Independencia',
            'Todos Santos Chuchcumatán',
            'San Juan Atitán',
            'Santa Eulalia',
            'San Mateo Ixtatán',
            'Colotenango',
            'San Sebastián Huehuetenango',
            'Tectitán',
            'Concepción Huista',
            'San Juan Ixcoy',
            'San Antonio Huista',
            'San Sebastián Coatán',
            'Santa Cruz Barillas',
            'Aguacatán',
            'San Rafael Petzal',
            'San Gaspar Ixchil',
            'Santiago Chimaltenango',
            'Santa Ana Huista'],

            'Quiche' => ['Santa Cruz del Quiche',
            'Chiche',
            'Chinique',
            'Zacualpa',
            'Chajul',
            'Santo Tomás Chichicstenango',
            'Patzité',
            'San Antonio Ilotenango',
            'San Pedro Jocopilas',
            'Cunén',
            'San Juan Cotzal',
            'Joyabaj'],

            'Baja Verapaz' => ['Salamá',
            'San Miguel Chicaj',
            'Rabinal',
            'Cubulco',
            'Granados',
            'Santa Cruz El Chol',
            'San Jerónimo',
            'Purulhá'],
            
            'Alta Verapaz' => ['Cobán',
            'Santa Cruz Verapaz',
            'San Cristobal Verapaz',
            'Tactíc',
            'Tamahú',
            'San Miguel Tucurú',
            'Panzos',
            'Senahú',
            'San Pedro Carchá',
            'SanJuan Chamelco',
            'Lanquín',
            'Santa María Cahabón',
            'Chisec',
            'Chahal',
            'Fray Bartolomé de las Casas',
            'Santa Catarina La Tinta'
            ],

            'Petén' => ['Flores',
            'San José',
            'San Benito',
            'San Andrés',
            'La Libertad',
            'San Francisco',
            'Santa Ana',
            'Dolores',
            'San Luis',
            'Sayaxche',
            'Melchor de Mencos',
            'Ponpúl'
            ],

            'Zacapa' => ['Zacapa',
            'Estanzuela',
            'Río Hondo',
            'Gualán',
            'Teculután',
            'Usumatlán',
            'Cabañas',
            'San Diego',
            'La Unión',
            'Huite'
            ],

            'Izabal' => ['Puerto Barrios',
            'Livingston',
            'El Estor',
            'Morales',
            'Los Amates'
            ],

            'Chiquimula' => ['Chiquimula',
            'San José La Arada',
            'San Juan Hermita',
            'Jocotán',
            'Camotán',
            'Olopa',
            'Esquipulas',
            'Concepción Las Minas',
            'Quezaltepeque',
            'San Jacinto',
            'Ipala'
            ],

            'Jalapa' => ['Jalapa',
            'San Pedro Pinula',
            'San Luis Jilotepeque',
            'San Manuel Chaparrón',
            'San Carlos Alzatate',
            'Monjas',
            'Mataquescuintla'
            ],

            'Jutiapa' => ['Jutiapa',
            'El Progreso',
            'Santa Catarina Mita',
            'Agua Blanca',
            'Asunción Mita',
            'Yupiltepeque',
            'Atescatempa',
            'Jerez',
            'El Adelanto',
            'Zapotitlán',
            'Comapa',
            'Jalpatagua',
            'Conguaco',
            'Moyuta',
            'Pasaco',
            'San José Acatempa',
            'Quezada'
            ],
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
        //$this->generarNotificaciones($viaje);
        $idbuscar = Auth::id();
        $vehiculo = Vehiculo::where('id_conductor', $idbuscar)->first();
        $piezas = Pieza::where('id_vehiculos', $vehiculo->id)->get();
        foreach ($piezas as $pieza) {
            $diferencia = ($pieza->Kil_insta_o_mant+$pieza->Kil_para_mant )- $viaje->kilometrajellegada;
            if ($diferencia <= 100) {
                // Crear una notificación para esta pieza
                Notificacione::create([
                    'id_vehiculos' => $vehiculo->id,
                    'id_pieza' => $pieza->id,
                    'detalle' => 'La pieza "' . $pieza->nombre . '" requiere mantenimiento.',
                    'estado' => 1,
                ]);
            }
        }
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
