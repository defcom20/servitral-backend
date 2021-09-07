<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\EmpleadoEconomia;

class EmpleadoEconomiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoEconomia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'ingreso_adi' => $this->faker->boolean,
            'actividad_adi' => $this->faker->word,
            'monto_adi' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_cony' => $this->faker->boolean,
            'actividad_cony' => $this->faker->word,
            'monto_cony' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_ali' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_edu' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_sal' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_viv' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_ser' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_hig' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_lim' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_tra' => $this->faker->randomFloat(2, 0, 999999.99),
            'ingreso_total' => $this->faker->randomFloat(2, 0, 999999.99),
            'empleado_id' => Empleado::factory(),
        ];
    }
}
