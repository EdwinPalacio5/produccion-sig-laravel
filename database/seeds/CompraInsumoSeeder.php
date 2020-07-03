<?php

use Illuminate\Database\Seeder;
use App\CompraInsumo;

class CompraInsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevafecha = date ('2016-01-01');
        for ($i = 1; $i <= 18; $i++) { 
            for ($j = 1; $j <= 10; $j++) {
                CompraInsumo::create([
                    'id_linea_compra'=> (10*($i-1) + $j),
                    'id_insumo'=>$j,
                    'cantidad_insumo'=> rand(2000, 2500),
                    'precio_unitario_insumo'=> rand(300, 350)/100,
                    'fecha_compra_insumo'=> $nuevafecha
                ]);
            }
            $nuevafecha = strtotime ('+3 month',strtotime ($nuevafecha));
            $nuevafecha = date ('Y-m-j', $nuevafecha );

        }
        
        
    }
}
