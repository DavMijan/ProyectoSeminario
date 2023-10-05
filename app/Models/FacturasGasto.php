<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacturasGasto
 *
 * @property $id
 * @property $codigoFactura
 * @property $fecha
 * @property $cantidadgalones
 * @property $montototal
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacturasGasto extends Model
{
    
    static $rules = [
		'codigoFactura' => 'required',
		'fecha' => 'required',
		'cantidadgalones' => 'required',
		'montototal' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoFactura','fecha','cantidadgalones','montototal','estado'];



}
