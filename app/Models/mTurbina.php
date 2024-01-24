<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mTurbina extends Model
{
    use HasFactory;

    protected $table = "m_turbinas";

    protected $fillable = [ 
        'modelo_equipo', 
        'rango_flujo',
        'rango_temperatura',
        'numero_serie',
        'precision',
        'suministro_energia',
        'salida_modelo', 
        'fecha'
    ];
}