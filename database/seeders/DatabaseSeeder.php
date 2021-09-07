<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(2)->create();
        //\App\Models\Modulo::factory(5)->create();
        //\App\Models\Submodulo::factory(20)->create();
        //\App\Models\UsuProyecto::factory(1)->create();
        //\App\Models\UsuModulo::factory(1)->create();
        \App\Models\UsuSubmodulo::factory(20)->create();
    }
}
