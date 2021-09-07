<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Banco;
use App\Models\Calzado;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Empleado;
use App\Models\GradoInstruccion;
use App\Models\Pais;
use App\Models\Profesion;
use App\Models\Provincia;
use App\Models\SistemaPension;
use App\Models\Uniforme;
use App\Models\User;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'dni' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'codmanual' => $this->faker->word,
            'nombre' => $this->faker->word,
            'apellido' => $this->faker->word,
            'sexo' => $this->faker->word,
            'pais_id' => Pais::factory(),
            'departamento_id' => Departamento::factory(),
            'provincia_id' => Provincia::factory(),
            'distrito_id' => Distrito::factory(),
            'fnacimiento' => $this->faker->word,
            'estadocivil' => $this->faker->word,
            'correo' => $this->faker->word,
            'grado_instruccion_id' => GradoInstruccion::factory(),
            'profesion_id' => Profesion::factory(),
            'banco_id' => Banco::factory(),
            'cuentabancaria' => $this->faker->word,
            'sistema_pension_id' => SistemaPension::factory(),
            'cuss' => $this->faker->word,
            'esalud' => $this->faker->word,
            'nombre_jr' => $this->faker->word,
            'nro_mz' => $this->faker->word,
            'int_lte' => $this->faker->word,
            'urb_asoc' => $this->faker->word,
            'referencia' => $this->faker->word,
            'tlefcasa' => $this->faker->word,
            'tlefmovil' => $this->faker->word,
            'tleffamiliar' => $this->faker->word,
            'tlefotro' => $this->faker->word,
            'uniforme_id' => Uniforme::factory(),
            'calzado_id' => Calzado::factory(),
            'numerolicencia' => $this->faker->word,
            'user_id' => User::factory(),
            'foto' => $this->faker->word,
        ];
    }
}
