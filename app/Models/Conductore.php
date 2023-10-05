<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $id_vehiculos
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'edad' => 'required',
		'id_vehiculos' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','edad','id_vehiculos','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculos');
    }
    

}
