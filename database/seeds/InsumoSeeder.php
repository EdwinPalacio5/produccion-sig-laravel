<?php

use Illuminate\Database\Seeder;
use App\Insumo;
use App\CompraInsumo;

class InsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Supply
        Insumo::create([
            'id_insumo'=>1,
            'nombre_insumo'=>'Lino',
            'unidad_insumo'=>'Rollos'
        ]);
        Insumo::create([
            'id_insumo'=>2,
            'nombre_insumo'=>'Lana',
            'unidad_insumo'=>'Rollos'
        ]);
        Insumo::create([
            'id_insumo'=>3,
            'nombre_insumo'=>'Seda',
            'unidad_insumo'=>'Rollos'
        ]);
        Insumo::create([
            'id_insumo'=>4,
            'nombre_insumo'=>'Fibras sinteticas',
            'unidad_insumo'=>'Kg'
        ]);
        Insumo::create([
            'id_insumo'=>5,
            'nombre_insumo'=>'Algodon',
            'unidad_insumo'=>'Lb'
        ]);
        Insumo::create([
            'id_insumo'=>6,
            'nombre_insumo'=>'Amianto',
            'unidad_insumo'=>'Kg'
        ]);
        Insumo::create([
            'id_insumo'=>7,
            'nombre_insumo'=>'Hilo Clase B',
            'unidad_insumo'=>'Rollos'
        ]);
        Insumo::create([
            'id_insumo'=>8,
            'nombre_insumo'=>'Sarga',
            'unidad_insumo'=>'Kg'
        ]);
        Insumo::create([
            'id_insumo'=>9,
            'nombre_insumo'=>'Fibra alginica',
            'unidad_insumo'=>'Cajas'
        ]);
        Insumo::create([
            'id_insumo'=>10,
            'nombre_insumo'=>'Fibra celulosica',
            'unidad_insumo'=>'Cajas'
        ]);

        //Purshases per supply
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
            'fecha_compra_insumo'=>'2017-01-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>3,
            'id_insumo'=>1,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-01-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>4,
            'id_insumo'=>1,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-01-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>5,
            'id_insumo'=>1,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2017-01-05 12:00:00'
        ]);

        //Suply 2
        CompraInsumo::create([
            'id_linea_compra'=>6,
            'id_insumo'=>2,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-01-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>7,
            'id_insumo'=>2,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-06-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>8,
            'id_insumo'=>2,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-06-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>9,
            'id_insumo'=>2,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-06-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>10,
            'id_insumo'=>2,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2017-09-05 12:00:00'
        ]);

        //Suply 3
        CompraInsumo::create([
            'id_linea_compra'=>11,
            'id_insumo'=>3,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>3.75,
            'fecha_compra_insumo'=>'2017-02-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>12,
            'id_insumo'=>3,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>3.00,
            'fecha_compra_insumo'=>'2017-02-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>13,
            'id_insumo'=>3,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>3.15,
            'fecha_compra_insumo'=>'2017-03-03 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>14,
            'id_insumo'=>3,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>3.56,
            'fecha_compra_insumo'=>'2017-04-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>15,
            'id_insumo'=>2,
            'cantidad_insumo'=>9500,
            'precio_unitario_insumo'=>2.97,
            'fecha_compra_insumo'=>'2017-08-05 12:00:00'
        ]);

        //Suply 4
        CompraInsumo::create([
            'id_linea_compra'=>16,
            'id_insumo'=>4,
            'cantidad_insumo'=>4500,
            'precio_unitario_insumo'=>8.75,
            'fecha_compra_insumo'=>'2017-02-01'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>17,
            'id_insumo'=>4,
            'cantidad_insumo'=>3500,
            'precio_unitario_insumo'=>5.00,
            'fecha_compra_insumo'=>'2017-02-02 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>18,
            'id_insumo'=>4,
            'cantidad_insumo'=>8000,
            'precio_unitario_insumo'=>9.15,
            'fecha_compra_insumo'=>'2017-03-03 12:00:00'
        ]);

        //Suply 5
        CompraInsumo::create([
            'id_linea_compra'=>19,
            'id_insumo'=>5,
            'cantidad_insumo'=>5200,
            'precio_unitario_insumo'=>13.56,
            'fecha_compra_insumo'=>'2016-04-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>20,
            'id_insumo'=>5,
            'cantidad_insumo'=>3562,
            'precio_unitario_insumo'=>12.56,
            'fecha_compra_insumo'=>'2016-08-05 12:00:00'
        ]);

        //Suply 6
        CompraInsumo::create([
            'id_linea_compra'=>21,
            'id_insumo'=>6,
            'cantidad_insumo'=>10500,
            'precio_unitario_insumo'=>25.56,
            'fecha_compra_insumo'=>'2016-04-04 12:00:00'
        ]);

        //Suply 7
        CompraInsumo::create([
            'id_linea_compra'=>22,
            'id_insumo'=>7,
            'cantidad_insumo'=>3562,
            'precio_unitario_insumo'=>12.56,
            'fecha_compra_insumo'=>'2016-08-05 12:00:00'
        ]);

        //Suply 8
        CompraInsumo::create([
            'id_linea_compra'=>23,
            'id_insumo'=>8,
            'cantidad_insumo'=>8900,
            'precio_unitario_insumo'=>50.56,
            'fecha_compra_insumo'=>'2017-04-04 12:00:00'
        ]);

        // Supply 9
        CompraInsumo::create([
            'id_linea_compra'=>24,
            'id_insumo'=>9,
            'cantidad_insumo'=>3562,
            'precio_unitario_insumo'=>12.56,
            'fecha_compra_insumo'=>'2017-08-05 12:00:00'
        ]);

        // Supply 10
        //Suply 5
        CompraInsumo::create([
            'id_linea_compra'=>25,
            'id_insumo'=>10,
            'cantidad_insumo'=>12500,
            'precio_unitario_insumo'=>10.25,
            'fecha_compra_insumo'=>'2016-04-04 12:00:00'
        ]);
        CompraInsumo::create([
            'id_linea_compra'=>26,
            'id_insumo'=>10,
            'cantidad_insumo'=>15000,
            'precio_unitario_insumo'=>10.00,
            'fecha_compra_insumo'=>'2017-6-28 12:00:00'
        ]);
    }
}
