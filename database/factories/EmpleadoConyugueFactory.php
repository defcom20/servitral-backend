<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Civil;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Empleado;
use App\Models\EmpleadoConyugue;
use App\Models\GradoInstruccion;
use App\Models\Pais;
use App\Models\Profesion;
use App\Models\Provincia;

class EmpleadoConyugueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoConyugue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'nombre' => $this->faker->word,
            'dni' => $this->faker->word,
            'pais_id' => Pais::factory(),
            'departamento_id' => Departamento::factory(),
            'provincia_id' => Provincia::factory(),
            'distrito_id' => Distrito::factory(),
            'fchanacimiento' => $this->faker->word,
            'civil_id' => Civil::factory(),
            'partida' => $this->faker->word,
            'grado_instruccion_id' => GradoInstruccion::factory(),
            'profesion_id' => Profesion::factory(),
            'actividad' => $this->faker->word,
            'empleado_id' => Empleado::factory(),
        ];
    }
}
