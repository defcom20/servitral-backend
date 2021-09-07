<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Almacen;
use App\Models\Kardex;
use App\Models\Proyecto;
use App\Models\TipoCambio;
use App\Models\TipoMovimiento;

class KardexFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kardex::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'fecha' => $this->faker->date(),
            'almacen_id' => Almacen::factory(),
            'tipo_movimiento' => TipoMovimiento::factory(),
            'tipo_cambio' => TipoCambio::factory(),
            'articulo_id' => $this->faker->word,
            'numero_parte' => $this->faker->word,
            'numero_documento' => $this->faker->word,
            'fecha_documento' => $this->faker->date(),
            'tipo' => $this->faker->numberBetween(-10000, 10000),
            'ingreso' => $this->faker->randomFloat(2, 0, 999999.99),
            'salida' => $this->faker->randomFloat(2, 0, 999999.99),
            'saldo' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_unitario' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_promedio' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_ingreso' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_salida' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_saldo' => $this->faker->randomFloat(2, 0, 999999.99),
            'numero_orden' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'saldo_anterior' => $this->faker->randomFloat(2, 0, 999999.99),
            'costo_anterior' => $this->faker->randomFloat(2, 0, 999999.99),
            'promedio_anterior' => $this->faker->randomFloat(2, 0, 999999.99),
            'precio_unitario' => $this->faker->randomFloat(2, 0, 999999.99),
            'cod_control' => $this->faker->word,
            'ciclos' => $this->faker->word,
            'comentario' => $this->faker->word,
            'proyecto_id' => Proyecto::factory(),
        ];
    }
}
