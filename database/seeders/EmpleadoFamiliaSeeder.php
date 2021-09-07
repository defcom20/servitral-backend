<?php

namespace Database\Seeders;

use App\Models\EmpleadoFamilia;
use Illuminate\Database\Seeder;

class EmpleadoFamiliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoFamilia::factory()->count(5)->create();
    }
}
