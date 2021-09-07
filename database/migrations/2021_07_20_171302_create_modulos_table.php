<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->integer('codigom')->unique();
            $table->string('nombre', 20);
            $table->string('slug')->unique();
            $table->string('icon', 20)->nullable();
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
        Schema::dropIfExists('modulos');
    }
}
