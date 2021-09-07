<?php

namespace Database\Seeders;

use App\Models\Civil;
use Illuminate\Database\Seeder;

class CivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Civil::factory()->count(5)->create();
    }
}
