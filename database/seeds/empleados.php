<?php

use Illuminate\Database\Seeder;

class empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Xabi',
            'apellido' => 'Lazkano',
            'email' => 'xlazkano@gmail.com',
            'telefono' => '696969699'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Iñigo',
            'apellido' => 'Perez',
            'email' => 'iperez@gmail.com',
            'telefono' => '696659699'
        ]);
    }
}
