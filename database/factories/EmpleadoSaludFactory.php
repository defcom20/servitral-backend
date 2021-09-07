<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\EmpleadoSalud;
use App\Models\Sanguineo;

class EmpleadoSaludFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoSalud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'sanguineo_id' => Sanguineo::factory(),
            'enfermedad_t' => $this->faker->word,
            'enfermedad_f' => $this->faker->word,
            'empleado_id' => Empleado::factory(),
        ];
    }
}
