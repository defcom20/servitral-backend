<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('almacen_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->foreignId('almacen_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('sigla_ad');
            $table->date('fecha')->nullable();
            $table->foreignId('articulo_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('item');
            $table->string('cant_ingreso');
            $table->string('cant_salida');
            $table->string('precio_unitario');
            $table->string('sub_total');
            $table->string('igv');
            $table->string('total_soles');
            $table->string('total_dolar');
            $table->foreignId('proyecto_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('almacen_detalles');
    }
}
