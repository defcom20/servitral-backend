<?php

namespace Database\Seeders;

use App\Models\EmpleadoFormacion;
use Illuminate\Database\Seeder;

class EmpleadoFormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoFormacion::factory()->count(5)->create();
    }
}
