<?php

namespace Database\Seeders;

use App\Models\UsuModulo;
use Illuminate\Database\Seeder;

class UsuModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuModulo::factory()->count(5)->create();
    }
}
