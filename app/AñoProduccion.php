<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AñoProduccion extends Model
{
    protected $table = 'años_produccion';
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
