<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_saluds', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->foreignId('sanguineo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('enfermedad_t');
            $table->string('enfermedad_f');
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
        Schema::dropIfExists('empleado_saluds');
    }
}
