<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TipoMovimiento;

class TipoMovimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoMovimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'codigo' => $this->faker->word,
            'descripcion' => $this->faker->word,
            'tipo' => $this->faker->numberBetween(-10000, 10000),
            'estado' => $this->faker->boolean,
        ];
    }
}
