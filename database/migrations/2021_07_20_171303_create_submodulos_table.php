<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmodulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('submodulos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->integer('codigom')->unique();
            $table->foreignId('modulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->date('fchaactivacion')->nullable();
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
        Schema::dropIfExists('submodulos');
    }
}
