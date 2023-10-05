<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pieza
 *
 * @property $id
 * @property $id_vehiculos
 * @property $nombre
 * @property $fechainstalacion
 * @property $estadocompra
 * @property $estadopieza
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pieza extends Model
{
    
    static $rules = [
		'id_vehiculos' => 'required',
		'nombre' => 'required',
		'fechainstalacion' => 'required',
		'estadocompra' => 'required',
		'estadopieza' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vehiculos','nombre','fechainstalacion','estadocompra','estadopieza','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculos');
    }
    

}
