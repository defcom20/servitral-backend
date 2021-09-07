<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuSubmodulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('usu_submodulos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->mediumInteger('tipopermiso');
            $table->date('fchaactivacion')->nullable();
            $table->boolean('estado');
            $table->foreignId('usu_modulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('submodulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('usu_submodulos');
    }
}
