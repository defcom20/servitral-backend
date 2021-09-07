<?php

namespace Database\Seeders;

use App\Models\EmpleadoSalud;
use Illuminate\Database\Seeder;

class EmpleadoSaludSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoSalud::factory()->count(5)->create();
    }
}
