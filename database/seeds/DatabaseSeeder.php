<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            YearAndMonthSeeder::class,
            InsumoSeeder::class,
            RotacionMPSeeder::class,
            RolTableSeeder::class,
            UserTableSeeder::class,
            EstadoTableSeeder::class,
            ProductoTableSeeder::class,
            PedidoTableSeeder::class,
            LineasPedidoTableSeeder::class,
            //CompraInsumoSeeder::class
        ]);
    }
}
