<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('img');
            $table->string('codigoactivo');
            $table->foreignId('unidad_medida_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nroparte');
            $table->string('stockmin');
            $table->string('precio');
            $table->date('fechav')->nullable();
            $table->string('impigv');
            $table->string('impisc');
            $table->string('ctaprovicional');
            $table->string('ctaisc');
            $table->string('ctaigv');
            $table->string('ctavarios');
            $table->boolean('estado');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('articulos');
    }
}
