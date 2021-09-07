<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tipo_cambios', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('month_year');
            $table->decimal('purchase', 8, 2);
            $table->decimal('sale', 8, 2);
            $table->string('date', 10);
            $table->string('day', 10);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('tipo_cambios');
    }
}
