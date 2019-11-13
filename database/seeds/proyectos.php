<?php

use Illuminate\Database\Seeder;

class proyectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyectos')->insert([
            'nombre' => 'Laravel',
            'titulo' => 'Ultimo',
            'fechainicio' => '2019-12-1',
            'fechafin' => '2019-12-31',
            'horasestimadas' =>156
        ]);
    }
}
