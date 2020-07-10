<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestadores', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('Cedula');
          $table->string('Nombres', 100);
          $table->string('Apellido', 100);
          $table->integer('idEncuesta');
          $table->string('Correo',200);
          $table->string('Telefono',11);
          $table->string('Sexo',11);
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
        Schema::dropIfExists('encuestadores');
    }
}
