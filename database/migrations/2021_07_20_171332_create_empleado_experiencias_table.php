<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_experiencias', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('empresa');
            $table->string('funcion');
            $table->string('fchainicio');
            $table->string('fchafinal');
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
        Schema::dropIfExists('empleado_experiencias');
    }
}
