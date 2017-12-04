<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('estado',['Pendiente','Rechazada','Aceptada']);

            $table->integer('idUsuarioSolicitante')->unsigned();
            $table->foreign('idUsuarioSolicitante')->references('id')->on('user')->onDelete('cascade');
            
            $table->integer('idUsuarioResponde')->unsigned();
            $table->foreign('idUsuarioResponde')->references('id')->on('user')->onDelete('cascade');

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
        Schema::dropIfExists('request');
    }
}
