<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\EmpleadoSituacion;

class EmpleadoSituacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoSituacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'casa' => $this->faker->word,
            'material' => $this->faker->word,
            'tipo' => $this->faker->word,
            'agua' => $this->faker->word,
            'desague' => $this->faker->word,
            'luz' => $this->faker->word,
            'telefono' => $this->faker->word,
            'internet' => $this->faker->word,
            'cable' => $this->faker->word,
            'comunicacion' => $this->faker->word,
            'social' => $this->faker->word,
            'empleado_id' => Empleado::factory(),
        ];
    }
}
