<?php

namespace Database\Seeders;

use App\Models\EmpleadoPadres;
use Illuminate\Database\Seeder;

class EmpleadoPadresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoPadres::factory()->count(5)->create();
    }
}
