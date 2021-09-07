<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Almacen;
use App\Models\AlmacenDetalle;
use App\Models\Articulo;
use App\Models\Proyecto;

class AlmacenDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AlmacenDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'almacen_id' => Almacen::factory(),
            'sigla_ad' => $this->faker->word,
            'fecha' => $this->faker->date(),
            'articulo_id' => Articulo::factory(),
            'item' => $this->faker->word,
            'cant_ingreso' => $this->faker->word,
            'cant_salida' => $this->faker->word,
            'precio_unitario' => $this->faker->word,
            'sub_total' => $this->faker->word,
            'igv' => $this->faker->word,
            'total_soles' => $this->faker->word,
            'total_dolar' => $this->faker->word,
            'proyecto_id' => Proyecto::factory(),
        ];
    }
}
