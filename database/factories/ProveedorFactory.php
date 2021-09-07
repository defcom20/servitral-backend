<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Proveedor;
use App\Models\User;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'ruc' => $this->faker->word,
            'razonsocial' => $this->faker->word,
            'direccion' => $this->faker->word,
            'estadoactual' => $this->faker->word,
            'emision' => $this->faker->word,
            'ple' => $this->faker->word,
            'telefonocelular' => $this->faker->numberBetween(-10000, 10000),
            'telefonofijo' => $this->faker->numberBetween(-10000, 10000),
            'nombrecontacto' => $this->faker->word,
            'correo' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'cuentabancaria' => $this->faker->numberBetween(-10000, 10000),
            'observacion' => $this->faker->text,
            'user_id' => User::factory(),
            'estado' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
