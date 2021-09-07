<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKardexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('kardexes', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->date('fecha')->nullable();
            $table->foreignId('almacen_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_movimiento')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_cambio')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('articulo_id');
            $table->string('numero_parte');
            $table->string('numero_documento');
            $table->date('fecha_documento')->nullable();
            $table->mediumInteger('tipo');
            $table->decimal('ingreso', 8, 2);
            $table->decimal('salida', 8, 2);
            $table->decimal('saldo', 8, 2);
            $table->decimal('costo_unitario', 8, 2);
            $table->decimal('costo_promedio', 8, 2);
            $table->decimal('costo_ingreso', 8, 2);
            $table->decimal('costo_salida', 8, 2);
            $table->decimal('costo_saldo', 8, 2);
            $table->string('numero_orden', 10);
            $table->decimal('saldo_anterior', 8, 2);
            $table->decimal('costo_anterior', 8, 2);
            $table->decimal('promedio_anterior', 8, 2);
            $table->decimal('precio_unitario', 8, 2);
            $table->string('cod_control');
            $table->string('ciclos');
            $table->string('comentario');
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
        Schema::dropIfExists('kardexes');
    }
}
