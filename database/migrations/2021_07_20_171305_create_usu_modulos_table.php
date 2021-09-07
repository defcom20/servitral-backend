<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('usu_modulos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->date('fchaactivacion')->nullable();
            $table->boolean('estado');
            $table->foreignId('usu_proyecto_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('modulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('usu_modulos');
    }
}
