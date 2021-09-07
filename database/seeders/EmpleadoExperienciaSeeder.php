<?php

namespace Database\Seeders;

use App\Models\EmpleadoExperiencia;
use Illuminate\Database\Seeder;

class EmpleadoExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoExperiencia::factory()->count(5)->create();
    }
}
