<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mantenimiento
 *
 * @property $id
 * @property $id_vehiculos
 * @property $tipomantenimiento
 * @property $costomantenimiento
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mantenimiento extends Model
{
    
    static $rules = [
		'id_vehiculos' => 'required',
		'tipomantenimiento' => 'required',
		'costomantenimiento' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vehiculos','tipomantenimiento','costomantenimiento','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculos');
    }
    

}
