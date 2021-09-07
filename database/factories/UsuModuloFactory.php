<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Modulo;
use App\Models\UsuModulo;
use App\Models\UsuProyecto;

class UsuModuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuModulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'fchaactivacion' => $this->faker->date(),
            'estado' => $this->faker->boolean,
            'usu_proyecto_id' => UsuProyecto::factory(),
            'modulo_id' => Modulo::factory(),
        ];
    }
}
