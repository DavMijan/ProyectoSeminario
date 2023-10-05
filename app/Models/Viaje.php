<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $id_conductores
 * @property $fecha
 * @property $horasalida
 * @property $kilometrajesalida
 * @property $horallegada
 * @property $kilometrajellegada
 * @property $id_lugares
 * @property $id_facturas_gastos
 * @property $objetivovisita
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    static $rules = [
		'id_conductores' => 'required',
		'fecha' => 'required',
		'horasalida' => 'required',
		'kilometrajesalida' => 'required',
		'horallegada' => 'required',
		'kilometrajellegada' => 'required',
		'id_lugares' => 'required',
		'id_facturas_gastos' => 'required',
		'objetivovisita' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_conductores','fecha','horasalida','kilometrajesalida','horallegada','kilometrajellegada','id_lugares','id_facturas_gastos','objetivovisita','estado'];



}
