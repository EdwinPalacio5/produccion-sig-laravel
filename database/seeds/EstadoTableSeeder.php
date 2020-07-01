<?php

use Illuminate\Database\Seeder;
use App\EstadoPedido;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //No iniciado
        EstadoPedido::create([
        	'id_estado_pedido' => 1,
        	'estado_pedido' => 'No iniciado'
        ]);

        //Iniciado
        EstadoPedido::create([
        	'id_estado_pedido' => 2,
        	'estado_pedido' => 'Iniciado'
        ]);

        //Finalizado
        EstadoPedido::create([
        	'id_estado_pedido' => 3,
        	'estado_pedido' => 'Finalizado'
        ]);
    }
}
