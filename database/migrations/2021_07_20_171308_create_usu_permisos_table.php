<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('usu_permisos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->foreignId('usuer_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('proyecto_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('modulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('submodulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_permiso_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('usu_permisos');
    }
}
