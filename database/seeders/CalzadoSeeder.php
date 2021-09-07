<?php

namespace Database\Seeders;

use App\Models\Calzado;
use Illuminate\Database\Seeder;

class CalzadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calzado::factory()->count(5)->create();
    }
}
