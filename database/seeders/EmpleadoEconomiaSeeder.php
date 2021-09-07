<?php

namespace Database\Seeders;

use App\Models\EmpleadoEconomia;
use Illuminate\Database\Seeder;

class EmpleadoEconomiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoEconomia::factory()->count(5)->create();
    }
}
