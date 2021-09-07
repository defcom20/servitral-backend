<?php

namespace Database\Seeders;

use App\Models\TipoMaquina;
use Illuminate\Database\Seeder;

class TipoMaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMaquina::factory()->count(5)->create();
    }
}
