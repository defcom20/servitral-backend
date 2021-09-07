<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('ruc');
            $table->string('razonsocial');
            $table->string('direccion')->nullable();
            $table->string('estadoactual')->nullable();
            $table->string('emision')->nullable();
            $table->string('ple')->nullable();
            $table->integer('telefonocelular')->nullable();
            $table->integer('telefonofijo')->nullable();
            $table->string('nombrecontacto')->nullable();
            $table->string('correo', 100)->nullable();
            $table->integer('cuentabancaria')->nullable();
            $table->text('observacion')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('proveedors');
    }
}
