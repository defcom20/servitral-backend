<?php

namespace Database\Seeders;

use App\Models\Submodulo;
use Illuminate\Database\Seeder;

class SubmoduloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submodulo::factory()->count(5)->create();
    }
}
