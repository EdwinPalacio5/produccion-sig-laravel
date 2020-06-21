<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = 'insumos';
    protected $fillable = [
        'id_insumo', 'nombre_insumo'
    ];

    /**
     * Get all purchases per supply.
     */
    public function compras(){
        return $this->hasMany('App\CompraInsumo');
    }

    /**
     * Get all rotations per supply.
     */
    public function rotaciones(){
        return $this->hasMany('App\RotacionInsumo');
    }
}
