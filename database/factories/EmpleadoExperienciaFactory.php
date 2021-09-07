<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\EmpleadoExperiencia;

class EmpleadoExperienciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoExperiencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'empresa' => $this->faker->word,
            'funcion' => $this->faker->word,
            'fchainicio' => $this->faker->word,
            'fchafinal' => $this->faker->word,
            'empleado_id' => Empleado::factory(),
        ];
    }
}
