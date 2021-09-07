<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoEconomiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_economias', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->boolean('ingreso_adi');
            $table->string('actividad_adi');
            $table->decimal('monto_adi', 8, 2);
            $table->boolean('ingreso_cony');
            $table->string('actividad_cony');
            $table->decimal('monto_cony', 8, 2);
            $table->decimal('ingreso_ali', 8, 2);
            $table->decimal('ingreso_edu', 8, 2);
            $table->decimal('ingreso_sal', 8, 2);
            $table->decimal('ingreso_viv', 8, 2);
            $table->decimal('ingreso_ser', 8, 2);
            $table->decimal('ingreso_hig', 8, 2);
            $table->decimal('ingreso_lim', 8, 2);
            $table->decimal('ingreso_tra', 8, 2);
            $table->decimal('ingreso_total', 8, 2);
            $table->foreignId('empleado_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('empleado_economias');
    }
}
