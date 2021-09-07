<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Submodulo;
use App\Models\UsuModulo;
use App\Models\UsuSubmodulo;

class UsuSubmoduloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuSubmodulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'tipopermiso' => $this->faker->numberBetween(-10000, 10000),
            'fchaactivacion' => $this->faker->date(),
            'estado' => $this->faker->boolean,
            'usu_modulo_id' => UsuModulo::factory(),
            'submodulo_id' => Submodulo::factory(),
        ];
    }
}
