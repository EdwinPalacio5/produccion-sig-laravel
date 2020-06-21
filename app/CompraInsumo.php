<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraInsumo extends Model
{
    protected $table = 'compras_insumos';
    protected $fillable = [
        'id_linea_compra','id_insumo', 'cantidad_insumo','precio_unitario_insumo','fecha_compra_insumo'
    ];
}
