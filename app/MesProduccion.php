<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesProduccion extends Model
{
    protected $table = 'meses_produccion';
    protected $fillable = [
        'id_mes','id_anio', 'mes'
    ];
}
