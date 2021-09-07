<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'dni' => $this->faker->numberBetween(-10000, 10000),
            'nombre' => $this->faker->word,
            'apellido' => $this->faker->word,
            'sexo' => $this->faker->numberBetween(-10000, 10000),
            'fchanacimiento' => $this->faker->date(),
            'email' => $this->faker->safeEmail,
            'direccion' => $this->faker->word,
            'telefcelular' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'teleffijo' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'usuario' => $this->faker->word,
            'password' => $this->faker->password,
            'passwordunico' => $this->faker->word,
            'tipousuario' => $this->faker->numberBetween(-10000, 10000),
            'foto' => $this->faker->word,
            'estado' => $this->faker->numberBetween(-10000, 10000),
            'email_verified_at' => $this->faker->dateTime(),
            'remember_token' => Str::random(10),
        ];
    }
}
