<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\EmpleadoFamilia;
use App\Models\Parentesco;

class EmpleadoFamiliaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoFamilia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'nombre' => $this->faker->word,
            'parentesco_id' => Parentesco::factory(),
            'dni' => $this->faker->word,
            'fchanacimiento' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'empleado_id' => Empleado::factory(),
        ];
    }
}
