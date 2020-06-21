<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioProduccion extends Model
{
    protected $table = 'anios_produccion';
    protected $fillable = [
        'id_anio', 'anio'
    ];

    /**
     * Get the months for the year.
     */
    public function meses(){
        return $this->hasMany('App\MesProduccion');
    }
}
