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
 * @property $Kil_insta_o_mant
 * @property $Kil_para_mant
 * @property $estadopieza
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Mantenimiento[] $mantenimientos
 * @property Notificacione[] $notificaciones
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
		'Kil_insta_o_mant' => 'required',
		'Kil_para_mant' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vehiculos','nombre','fechainstalacion','Kil_insta_o_mant','Kil_para_mant','estadopieza','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mantenimientos()
    {
        return $this->hasMany('App\Models\Mantenimiento', 'id_pieza', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificaciones()
    {
        return $this->hasMany('App\Models\Notificacione', 'id_pieza', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculos');
    }
    

}
