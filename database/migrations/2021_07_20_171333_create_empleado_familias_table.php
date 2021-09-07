<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado_familias', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('nombre');
            $table->foreignId('parentesco_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('dni');
            $table->string('fchanacimiento', 10);
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
        Schema::dropIfExists('empleado_familias');
    }
}
