<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Proyecto;
use App\Models\User;
use App\Models\UsuProyecto;

class UsuProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuProyecto::class;

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
            'user_id' => User::factory(),
            'proyecto_id' => Proyecto::factory(),
        ];
    }
}
