<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotacionInsumo extends Model
{
    protected $table = 'rotaciones_insumos';
    protected $fillable = [
        'id_rotacion', 'id_insumo','id_mes_anio','cantidad_disponible','cantidad_consumida'
    ];

    

    /**
     * Get supply that owns the rotation.
     */
    public function insumo(){
        return $this->belongsTo('App\Insumo','id_insumo','id_insumo');
    }

    /**
     * Get month that owns the rotation.
     */
    public function mesAnio(){
        return $this->belongsTo('App\MesAnio','id_mes_anio');
    }
}
