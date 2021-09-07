<?php

namespace Database\Seeders;

use App\Models\Kardex;
use Illuminate\Database\Seeder;

class KardexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kardex::factory()->count(5)->create();
    }
}
