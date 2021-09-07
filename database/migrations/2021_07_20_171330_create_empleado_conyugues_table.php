<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoConyuguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_conyugues', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('nombre');
            $table->string('dni');
            $table->foreignId('pais_id')->constrained('pais')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('departamento_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provincia_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('distrito_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('fchanacimiento');
            $table->foreignId('civil_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('partida');
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
        Schema::dropIfExists('empleado_conyugues');
    }
}
