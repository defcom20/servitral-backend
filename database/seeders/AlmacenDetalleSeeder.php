<?php

namespace Database\Seeders;

use App\Models\AlmacenDetalle;
use Illuminate\Database\Seeder;

class AlmacenDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlmacenDetalle::factory()->count(5)->create();
    }
}
