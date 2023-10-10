<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $id_conductor
 * @property $fecha
 * @property $horasalida
 * @property $kilometrajesalida
 * @property $horallegada
 * @property $kilometrajellegada
 * @property $departamento
 * @property $municipio
 * @property $direccion
 * @property $codigoFactura
 * @property $cantidadgalones
 * @property $montototal
 * @property $objetivovisita
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    static $rules = [
		'id_conductor' => 'required',
		'fecha' => 'required',
		'horasalida' => 'required',
		'kilometrajesalida' => 'required',
		'horallegada' => 'required',
		'kilometrajellegada' => 'required',
		'departamento' => 'required',
		'municipio' => 'required',
		'direccion' => 'required',
		'codigoFactura' => 'required',
		'cantidadgalones' => 'required',
		'montototal' => 'required',
		'objetivovisita' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_conductor','fecha','horasalida','kilometrajesalida','horallegada','kilometrajellegada','departamento','municipio','direccion','codigoFactura','cantidadgalones','montototal','objetivovisita','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_conductor');
    }

    public function vehiculo()
    {
        return $this->hasOneThrough(Vehiculo::class, User::class, 'id', 'id_conductor', 'id_conductor');
    }
    

}
