<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Civil;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Empleado;
use App\Models\EmpleadoPadres;
use App\Models\GradoInstruccion;
use App\Models\Profesion;
use App\Models\Provincia;

class EmpleadoPadresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoPadres::class;

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
            'sexo' => $this->faker->word,
            'dni' => $this->faker->word,
            'pais' => $this->faker->word,
            'departamento_id' => Departamento::factory(),
            'provincia_id' => Provincia::factory(),
            'distrito_id' => Distrito::factory(),
            'fecha_nacimiento' => $this->faker->date(),
            'civil_id' => Civil::factory(),
            'correo' => $this->faker->word,
            'grado_instruccion_id' => GradoInstruccion::factory(),
            'profesion_id' => Profesion::factory(),
            'actividad' => $this->faker->word,
            'empleado_id' => Empleado::factory(),
        ];
    }
}
