<?php

use Illuminate\Database\Seeder;

class departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Ventas',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administracion',
        ]);
    }
}
