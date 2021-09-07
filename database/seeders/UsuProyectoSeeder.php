<?php

namespace Database\Seeders;

use App\Models\UsuProyecto;
use Illuminate\Database\Seeder;

class UsuProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuProyecto::factory()->count(5)->create();
    }
}
