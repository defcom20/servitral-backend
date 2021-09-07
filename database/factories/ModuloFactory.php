<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Modulo;

class ModuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'codigom' => $this->faker->numberBetween(10, 100),
            'nombre' => $this->faker->name,
            'slug' => $this->faker->slug,
            'icon' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'fchaactivacion' => $this->faker->date(),
            'estado' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
