<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('codigo');
            $table->string('sigla_ag');
            $table->string('serie_ag');
            $table->string('periodo_ag');
            $table->string('numero_oc');
            $table->date('fecha_oc')->nullable();
            $table->string('correlativo');
            $table->string('fcha_correlativo');
            $table->string('tipo_oc');
            $table->foreignId('area_solicitante_id')->constrained('areas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('empleado_solicitante_id')->constrained('empleados')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('proveedor_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('guia');
            $table->date('fecha_guia')->nullable();
            $table->string('factura');
            $table->date('fecha_factura')->nullable();
            $table->foreignId('tipo_movimiento_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('area_responsable_id')->constrained('areas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('empleado_despacho_id')->constrained('empleados')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_autorizacion_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('numero_fisico');
            $table->foreignId('tipo_comprobante_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tipo_maquina_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('igv');
            $table->foreignId('tipo_cambio')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('tpopago');
            $table->string('tpomoneda');
            $table->string('observacio');
            $table->date('fecha')->nullable();
            $table->mediumInteger('estado');
            $table->string('user_id');
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
        Schema::dropIfExists('almacens');
    }
}
