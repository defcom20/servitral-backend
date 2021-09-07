<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Articulo;
use App\Models\UnidadMedida;
use App\Models\User;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

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
            'nombre' => $this->faker->word,
            'img' => $this->faker->word,
            'codigoactivo' => $this->faker->word,
            'unidad_medida_id' => UnidadMedida::factory(),
            'nroparte' => $this->faker->word,
            'stockmin' => $this->faker->word,
            'precio' => $this->faker->word,
            'fechav' => $this->faker->date(),
            'impigv' => $this->faker->word,
            'impisc' => $this->faker->word,
            'ctaprovicional' => $this->faker->word,
            'ctaisc' => $this->faker->word,
            'ctaigv' => $this->faker->word,
            'ctavarios' => $this->faker->word,
            'estado' => $this->faker->boolean,
            'user_id' => User::factory(),
        ];
    }
}
