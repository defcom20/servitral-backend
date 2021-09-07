<?php

namespace Database\Seeders;

use App\Models\Parentesco;
use Illuminate\Database\Seeder;

class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parentesco::factory()->count(5)->create();
    }
}
