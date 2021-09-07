<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('dni', 100);
            $table->string('codmanual');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->foreignId('pais_id')->constrained('pais')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('departamento_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provincia_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('distrito_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('fnacimiento');
            $table->string('estadocivil');
            $table->string('correo');
            $table->foreignId('grado_instruccion_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('profesion_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('banco_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('cuentabancaria');
            $table->foreignId('sistema_pension_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('cuss');
            $table->string('esalud');
            $table->string('nombre_jr');
            $table->string('nro_mz');
            $table->string('int_lte');
            $table->string('urb_asoc');
            $table->string('referencia');
            $table->string('tlefcasa');
            $table->string('tlefmovil');
            $table->string('tleffamiliar');
            $table->string('tlefotro');
            $table->foreignId('uniforme_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('calzado_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('numerolicencia');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('foto');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
