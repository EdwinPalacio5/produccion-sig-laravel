<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotacionInsumo extends Model
{
    protected $table = 'rotaciones_insumos';
    protected $fillable = [
        'id_rotacion', 'id_insumo','id_mes','cantidad_disponible','cantidad_consumida'
    ];

    /**
     * Get supply that owns the rotation.
     */
    public function insumo(){
        return $this->belongsTo('App\Insumo');
    }

    /**
     * Get month that owns the rotation.
     */
    public function mes(){
        return $this->belongsTo('App\MesProduccion');
    }
}
