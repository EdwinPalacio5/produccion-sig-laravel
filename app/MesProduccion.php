<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesProduccion extends Model
{
    protected $table = 'meses_produccion';
    protected $fillable = [
        'id_mes', 'mes'
    ];

    /**
     * Get the months for the year.
     */
    public function mesesAnios(){
        return $this->hasMany('App\MesAnio');
    }
}
