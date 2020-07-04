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
    }
}
