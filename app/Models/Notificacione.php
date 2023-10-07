<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacione
 *
 * @property $id
 * @property $id_vehiculos
 * @property $id_pieza
 * @property $detalle
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Pieza $pieza
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notificacione extends Model
{
    
    static $rules = [
		'id_vehiculos' => 'required',
		'id_pieza' => 'required',
		'detalle' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vehiculos','id_pieza','detalle','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pieza()
    {
        return $this->hasOne('App\Models\Pieza', 'id', 'id_pieza');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculos');
    }
    

}
