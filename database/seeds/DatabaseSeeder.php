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
        $this->call(departamentos::class);
        $this->call(empleados::class);
        $this->call(proyectos::class);
    }
}
