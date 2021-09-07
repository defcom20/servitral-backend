<?php

namespace Database\Seeders;

use App\Models\EmpleadoSituacion;
use Illuminate\Database\Seeder;

class EmpleadoSituacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoSituacion::factory()->count(5)->create();
    }
}
