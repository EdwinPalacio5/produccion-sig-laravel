<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Producto::create([
        	'id_producto' => 1,
        	'nombre_producto' => 'Hilaza'
        ]);

        Producto::create([
        	'id_producto' => 2,
        	'nombre_producto' => 'Telas de tejido de punto'
        ]);

        Producto::create([
        	'id_producto' => 3,
        	'nombre_producto' => 'Teñido'
        ]);

        Producto::create([
        	'id_producto' => 4,
        	'nombre_producto' => 'Estampado'
        ]);

        Producto::create([
        	'id_producto' => 5,
        	'nombre_producto' => 'Acabado especiales'
        ]);

        Producto::create([
        	'id_producto' => 6,
        	'nombre_producto' => 'Algodón Spandex'
        ]);

        Producto::create([
        	'id_producto' => 7,
        	'nombre_producto' => 'Polyester Spandex'
        ]);

        Producto::create([
        	'id_producto' => 8,
        	'nombre_producto' => 'Algodón- Polyester- Spandex'
        ]);

        Producto::create([
        	'id_producto' => 9,
        	'nombre_producto' => 'Algodón- Polyester- Rayon'
        ]);

        Producto::create([
        	'id_producto' => 10,
        	'nombre_producto' => 'Single Knit'
        ]);

        Producto::create([
        	'id_producto' => 11,
        	'nombre_producto' => 'Double Knit'
        ]);

        Producto::create([
        	'id_producto' => 12,
        	'nombre_producto' => 'Tejidos Polyester Tencel'
        ]);

        Producto::create([
        	'id_producto' => 13,
        	'nombre_producto' => 'Estampado Antimicrobial'
        ]);

        Producto::create([
        	'id_producto' => 14,
        	'nombre_producto' => 'Estampado Wicking'
        ]);

        Producto::create([
        	'id_producto' => 15,
        	'nombre_producto' => 'Estampado Antipilling'
        ]);

        Producto::create([
        	'id_producto' => 16,
        	'nombre_producto' => 'Estampado Brushed'
        ]);

        Producto::create([
        	'id_producto' => 17,
        	'nombre_producto' => 'Estampado UV protection'
        ]);

        Producto::create([
        	'id_producto' => 18,
        	'nombre_producto' => 'Tejido Single Knit'
        ]);

        Producto::create([
        	'id_producto' => 19,
        	'nombre_producto' => 'Tejido Double Knit'
        ]);

        Producto::create([
        	'id_producto' => 20,
        	'nombre_producto' => 'Tejido Jersey, Thermal'
        ]);
    }
}
