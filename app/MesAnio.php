<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesAnio extends Model
{
    protected $table = 'meses_anios';
    protected $fillable = [
        'id_mes_anio','id_mes','id_anio'
    ];

    /**
     * Get all rotation per month.
     */
    public function rotacionesInsumos(){
        return $this->hasMany('App\RotacionInsumo');
    }

    /**
     * Get year that owns the month_year
     */
    public function anio(){
        return $this->belongsTo('App\AnioProduccion');
    }

    /**
     * Get month that owns the month_year
     */
    public function mes(){
        return $this->belongsTo('App\MesProduccion');
    }
}
