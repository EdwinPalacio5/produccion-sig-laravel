<?php

use Illuminate\Database\Seeder;
use App\Pedido;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create([
        	'id_pedido' => 1,
        	'fecha_entrega' => '2010-07-28 21:52:27',
        	'id_estado_pedido' => 1
        ]);

        Pedido::create([
        	'id_pedido' => 2,
        	'fecha_entrega' => '2011-07-28 21:52:27',
        	'id_estado_pedido' => 1
        ]);

        Pedido::create([
        	'id_pedido' => 3,
        	'fecha_entrega' => '2012-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 4,
        	'fecha_entrega' => '2013-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 5,
        	'fecha_entrega' => '2014-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 6,
        	'fecha_entrega' => '2015-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 7,
        	'fecha_entrega' => '2016-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 8,
        	'fecha_entrega' => '2017-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 9,
        	'fecha_entrega' => '2018-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);

        Pedido::create([
        	'id_pedido' => 10,
        	'fecha_entrega' => '2019-07-28 21:52:27',
        	'id_estado_pedido' => 3
        ]);
    }
}
