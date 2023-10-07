<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $id_conductor
 * @property $TipoVehiculo
 * @property $Marca
 * @property $Modelo
 * @property $Año
 * @property $Kilometraje
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Mantenimiento[] $mantenimientos
 * @property Notificacione[] $notificaciones
 * @property Pieza[] $piezas
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'id_conductor' => 'required',
		'TipoVehiculo' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Año' => 'required',
		'Kilometraje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_conductor','TipoVehiculo','Marca','Modelo','Año','Kilometraje','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mantenimientos()
    {
        return $this->hasMany('App\Models\Mantenimiento', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificaciones()
    {
        return $this->hasMany('App\Models\Notificacione', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piezas()
    {
        return $this->hasMany('App\Models\Pieza', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_conductor');
    }
    
    public function viajes()
    {
        return $this->hasMany(Viaje::class, 'id_vehiculos', 'id');
    }

}
