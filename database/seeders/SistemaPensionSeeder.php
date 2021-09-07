<?php

namespace Database\Seeders;

use App\Models\SistemaPension;
use Illuminate\Database\Seeder;

class SistemaPensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SistemaPension::factory()->count(5)->create();
    }
}
