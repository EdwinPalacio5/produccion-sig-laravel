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
        return $this->hasMany('App\RotacionInsumo','id_mes_anio');
    }

    /**
     * Get year that owns the month_year
     */
    public function anio(){
        return $this->belongsTo('App\AnioProduccion','id_anio','id_anio');
    }

    /**
     * Get month that owns the month_year
     */
    public function mes(){
        return $this->belongsTo('App\MesProduccion','id_mes','id_mes');
    }
}
