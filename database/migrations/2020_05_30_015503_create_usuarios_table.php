<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('NombreUsuario', 100);
          $table->string('Contraseña', 100);
          $table->integer('idTipoUsuario');
          $table->integer('idModulo');
          $table->string('Correo',200);
          $table->string('Telefono',11);
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
        Schema::dropIfExists('usuarios');
    }
}
