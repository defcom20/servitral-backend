<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoPadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_padres', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('nombre');
            $table->string('sexo');
            $table->string('dni');
            $table->string('pais');
            $table->foreignId('departamento_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provincia_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('distrito_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('fecha_nacimiento')->nullable();
            $table->foreignId('civil_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('correo');
            $table->foreignId('grado_instruccion_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('profesion_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('actividad');
            $table->foreignId('empleado_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('empleado_padres');
    }
}
