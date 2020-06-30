<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
        	'rol_id' => 1,
        	'rol' => 'Administrador'
        ]);

        Rol::create([
        	'rol_id' => 2,
        	'rol' => 'Estratégico'
        ]);

        Rol::create([
        	'rol_id' => 3,
        	'rol' => 'Táctico'
        ]);
    }
}
