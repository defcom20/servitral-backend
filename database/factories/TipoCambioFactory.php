<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TipoCambio;
use App\Models\User;

class TipoCambioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoCambio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'month_year' => $this->faker->word,
            'purchase' => $this->faker->randomFloat(2, 0, 999999.99),
            'sale' => $this->faker->randomFloat(2, 0, 999999.99),
            'date' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'day' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'user_id' => User::factory(),
        ];
    }
}
