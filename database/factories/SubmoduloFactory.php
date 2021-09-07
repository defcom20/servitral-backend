<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Modulo;
use App\Models\Submodulo;

class SubmoduloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Submodulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'codigom' => $this->faker->numberBetween(-10000, 10000),
            'modulo_id' => Modulo::factory(),
            'nombre' => $this->faker->word,
            'slug' => $this->faker->slug,
            'fchaactivacion' => $this->faker->date(),
            'estado' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
