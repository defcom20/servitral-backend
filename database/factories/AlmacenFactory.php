<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Almacen;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\Proveedor;
use App\Models\Proyecto;
use App\Models\TipoAutorizacion;
use App\Models\TipoCambio;
use App\Models\TipoComprobante;
use App\Models\TipoMaquina;
use App\Models\TipoMovimiento;

class AlmacenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Almacen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'codigo' => $this->faker->word,
            'sigla_ag' => $this->faker->word,
            'serie_ag' => $this->faker->word,
            'periodo_ag' => $this->faker->word,
            'numero_oc' => $this->faker->word,
            'fecha_oc' => $this->faker->date(),
            'correlativo' => $this->faker->word,
            'fcha_correlativo' => $this->faker->word,
            'tipo_oc' => $this->faker->word,
            'area_solicitante_id' => Area::factory(),
            'empleado_solicitante_id' => Empleado::factory(),
            'proveedor_id' => Proveedor::factory(),
            'guia' => $this->faker->word,
            'fecha_guia' => $this->faker->date(),
            'factura' => $this->faker->word,
            'fecha_factura' => $this->faker->date(),
            'tipo_movimiento_id' => TipoMovimiento::factory(),
            'area_responsable_id' => Area::factory(),
            'empleado_despacho_id' => Empleado::factory(),
            'tipo_autorizacion_id' => TipoAutorizacion::factory(),
            'numero_fisico' => $this->faker->word,
            'tipo_comprobante_id' => TipoComprobante::factory(),
            'tipo_maquina_id' => TipoMaquina::factory(),
            'igv' => $this->faker->word,
            'tipo_cambio' => TipoCambio::factory(),
            'tpopago' => $this->faker->word,
            'tpomoneda' => $this->faker->word,
            'observacio' => $this->faker->word,
            'fecha' => $this->faker->date(),
            'estado' => $this->faker->numberBetween(-10000, 10000),
            'user_id' => $this->faker->word,
            'proyecto_id' => Proyecto::factory(),
        ];
    }
}
