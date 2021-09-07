<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoSituacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_situacions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('casa');
            $table->string('material');
            $table->string('tipo');
            $table->string('agua');
            $table->string('desague');
            $table->string('luz');
            $table->string('telefono');
            $table->string('internet');
            $table->string('cable');
            $table->string('comunicacion');
            $table->string('social');
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
        Schema::dropIfExists('empleado_situacions');
    }
}
