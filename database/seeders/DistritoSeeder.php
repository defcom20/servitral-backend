<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Seeder;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distrito::factory()->count(5)->create();
    }
}
