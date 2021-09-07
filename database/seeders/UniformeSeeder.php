<?php

namespace Database\Seeders;

use App\Models\Uniforme;
use Illuminate\Database\Seeder;

class UniformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uniforme::factory()->count(5)->create();
    }
}
