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
        //Compras para insumo 1
        CompraInsumo::create([
            'id_linea_compra'=>1,
            'id_insumo'=>1,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-01-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>2,
            'id_insumo'=>1,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-03-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>3,
            'id_insumo'=>1,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-06-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>4,
            'id_insumo'=>1,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-09-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>5,
            'id_insumo'=>1,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2018-01-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>6,
            'id_insumo'=>1,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2018-03-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>7,
            'id_insumo'=>1,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2018-06-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>8,
            'id_insumo'=>1,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2018-09-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>9,
            'id_insumo'=>1,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2019-01-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>10,
            'id_insumo'=>1,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2019-03-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>11,
            'id_insumo'=>1,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2019-06-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>12,
            'id_insumo'=>1,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2019-09-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>13,
            'id_insumo'=>1,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2020-01-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>14,
            'id_insumo'=>1,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2020-03-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>15,
            'id_insumo'=>1,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2020-06-05 12:00:00'
        ]);

        // Compras de Insumo 2
        CompraInsumo::create([
            'id_linea_compra'=>16,
            'id_insumo'=>2,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-01-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>17,
            'id_insumo'=>2,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-03-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>18,
            'id_insumo'=>2,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-06-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>19,
            'id_insumo'=>2,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-09-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>20,
            'id_insumo'=>2,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2018-01-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>21,
            'id_insumo'=>2,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2018-03-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=> 22,
            'id_insumo'=>2,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2018-06-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>23,
            'id_insumo'=>2,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2018-09-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>24,
            'id_insumo'=>2,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2019-01-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>25,
            'id_insumo'=>2,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2019-03-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>26,
            'id_insumo'=>2,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2019-06-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>27,
            'id_insumo'=>2,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2019-09-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>28,
            'id_insumo'=>2,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2020-01-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>29,
            'id_insumo'=>2,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2020-03-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>30,
            'id_insumo'=>2,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2020-06-05 12:00:00'
        ]);
        // Compras de Insumo 3
        CompraInsumo::create([
            'id_linea_compra'=>31,
            'id_insumo'=>3,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-01-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>32,
            'id_insumo'=>3,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-03-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>33,
            'id_insumo'=>3,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-06-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>34,
            'id_insumo'=>3,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-09-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>35,
            'id_insumo'=>3,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2018-01-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>36,
            'id_insumo'=>3,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2018-03-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=> 37,
            'id_insumo'=>3,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2018-06-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>38,
            'id_insumo'=>3,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2018-09-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>39,
            'id_insumo'=>3,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2019-01-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>40,
            'id_insumo'=>3,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2019-03-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>41,
            'id_insumo'=>3,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2019-06-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>42,
            'id_insumo'=>3,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2019-09-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>43,
            'id_insumo'=>3,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2020-01-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>44,
            'id_insumo'=>3,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2020-03-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>45,
            'id_insumo'=>3,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2020-06-05 12:00:00'
        ]);

        // Compras de Insumo 4
        CompraInsumo::create([
            'id_linea_compra'=>46,
            'id_insumo'=>4,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-01-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>47,
            'id_insumo'=>4,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-03-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>48,
            'id_insumo'=>4,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-06-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>49,
            'id_insumo'=>4,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-09-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>50,
            'id_insumo'=>4,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2018-01-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>51,
            'id_insumo'=>4,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2018-03-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=> 52,
            'id_insumo'=>2,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2018-06-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>53,
            'id_insumo'=>4,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2018-09-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>54,
            'id_insumo'=>5,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2019-03-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>55,
            'id_insumo'=>4,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2019-06-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>56,
            'id_insumo'=>4,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2019-09-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>57,
            'id_insumo'=>4,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2020-01-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>58,
            'id_insumo'=>4,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2020-03-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>59,
            'id_insumo'=>4,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2020-06-05 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>60,
            'id_insumo'=>4,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2019-01-04 12:00:00'
        ]);
    }
}
