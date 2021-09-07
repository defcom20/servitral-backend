<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Area;
use App\Models\Cargo;
use App\Models\Empleado;
use App\Models\EmpleadoDetalle;
use App\Models\Proyecto;
use App\Models\TipoContrato;

class EmpleadoDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'empleado_id' => Empleado::factory(),
            'proyecto_id' => Proyecto::factory(),
            'tipo_contrato_id' => TipoContrato::factory(),
            'fchaingreso' => $this->faker->word,
            'fchatermino' => $this->faker->word,
            'fchacese' => $this->faker->word,
            'area_id' => Area::factory(),
            'cargo_id' => Cargo::factory(),
            'motivocese' => $this->faker->word,
            'estado' => $this->faker->boolean,
        ];
    }
}
