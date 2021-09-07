<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('nombre');
            $table->foreignId('departamento_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provincia_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('distrito_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('proveedor_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('fchainicial')->nullable();
            $table->date('fchafinal')->nullable();
            $table->text('observacion')->nullable();
            $table->string('alm_sigla');
            $table->string('alm_serie');
            $table->string('com_sigla');
            $table->string('com_serie');
            $table->string('caj_sigla');
            $table->string('caj_serie');
            $table->mediumInteger('estado');
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
        Schema::dropIfExists('proyectos');
    }
}
