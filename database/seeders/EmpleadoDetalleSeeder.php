<?php

namespace Database\Seeders;

use App\Models\EmpleadoDetalle;
use Illuminate\Database\Seeder;

class EmpleadoDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoDetalle::factory()->count(5)->create();
    }
}
