<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->foreignId('empleado_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('proyecto_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_contrato_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('fchaingreso');
            $table->string('fchatermino');
            $table->string('fchacese');
            $table->foreignId('area_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cargo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('motivocese');
            $table->boolean('estado');
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
        Schema::dropIfExists('empleado_detalles');
    }
}
