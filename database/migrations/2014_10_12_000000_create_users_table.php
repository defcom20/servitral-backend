<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            /*$table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();*/
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->integer('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->mediumInteger('sexo');
            $table->date('fchanacimiento');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('telefcelular', 50);
            $table->string('teleffijo', 50);
            $table->string('usuario')->unique();
            $table->string('password');
            $table->string('passwordunico');
            $table->mediumInteger('tipousuario');
            $table->string('foto');
            $table->mediumInteger('estado');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
