<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Modulo;
use App\Models\Proyecto;
use App\Models\Submodulo;
use App\Models\TipoPermiso;
use App\Models\UsuPermiso;
use App\Models\Usuer;

class UsuPermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuPermiso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'usuer_id' => Usuer::factory(),
            'proyecto_id' => Proyecto::factory(),
            'modulo_id' => Modulo::factory(),
            'submodulo_id' => Submodulo::factory(),
            'tipo_permiso_id' => TipoPermiso::factory(),
        ];
    }
}
