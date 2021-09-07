<?php

namespace Database\Seeders;

use App\Models\UsuSubmodulo;
use Illuminate\Database\Seeder;

class UsuSubmoduloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuSubmodulo::factory()->count(5)->create();
    }
}
