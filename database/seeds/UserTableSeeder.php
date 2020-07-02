<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'id' => 1,
        	'name' => 'Edwin Palacios',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('produccion'),
        	'rol_id' => 1
        ]);

        User::create([
            'id' => 2,
            'name' => 'Juan Pérez',
            'email' => 'estrategico@gmail.com',
            'password' => bcrypt('produccion'),
            'rol_id' => 2
        ]);

        User::create([
            'id' => 3,
            'name' => 'Carlos Montalvo',
            'email' => 'tactico@gmail.com',
            'password' => bcrypt('produccion'),
            'rol_id' => 3
        ]);
    }
}
