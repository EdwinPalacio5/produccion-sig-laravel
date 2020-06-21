<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesProduccion extends Model
{
    protected $table = 'meses_produccion';
    protected $fillable = [
        'id_mes','id_anio', 'mes'
    ];

    /**
     * Get all rotation per month.
     */
    public function rotacionesInsumos(){
        return $this->hasMany('App\RotacionInsumo');
    }

    /**
     * Get year that owns the month
     */
    public function anio(){
        return $this->belongsTo('App\AnioProduccion');
    }
}
