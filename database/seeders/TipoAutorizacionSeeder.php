<?php

namespace Database\Seeders;

use App\Models\TipoAutorizacion;
use Illuminate\Database\Seeder;

class TipoAutorizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAutorizacion::factory()->count(5)->create();
    }
}
