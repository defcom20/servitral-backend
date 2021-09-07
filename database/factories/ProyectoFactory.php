<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Proveedor;
use App\Models\Provincia;
use App\Models\Proyecto;

class ProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyecto::class;

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
            'departamento_id' => Departamento::factory(),
            'provincia_id' => Provincia::factory(),
            'distrito_id' => Distrito::factory(),
            'proveedor_id' => Proveedor::factory(),
            'fchainicial' => $this->faker->date(),
            'fchafinal' => $this->faker->date(),
            'observacion' => $this->faker->text,
            'alm_sigla' => $this->faker->word,
            'alm_serie' => $this->faker->word,
            'com_sigla' => $this->faker->word,
            'com_serie' => $this->faker->word,
            'caj_sigla' => $this->faker->word,
            'caj_serie' => $this->faker->word,
            'estado' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
