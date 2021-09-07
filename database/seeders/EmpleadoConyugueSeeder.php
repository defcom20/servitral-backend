<?php

namespace Database\Seeders;

use App\Models\EmpleadoConyugue;
use Illuminate\Database\Seeder;

class EmpleadoConyugueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoConyugue::factory()->count(5)->create();
    }
}
