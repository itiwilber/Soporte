<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBitacoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivelGas');
            $table->string('carroceria');
            $table->string('nivelAceite');
            $table->integer('kilometros');
            $table->string('llantas');
            $table->string('destino');
            $table->string('conductor');
            $table->date('fecha');
            $table->time('horario');
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
        Schema::drop('bitacoras');
    }
}
