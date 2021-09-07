<?php

namespace Database\Seeders;

use App\Models\GradoInstruccion;
use Illuminate\Database\Seeder;

class GradoInstruccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradoInstruccion::factory()->count(5)->create();
    }
}
