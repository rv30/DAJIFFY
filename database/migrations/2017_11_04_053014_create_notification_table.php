<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo',['Comentario','Like','Solicitud']);
            $table->boolean('visto');
            
            $table->integer('idSolicitud')->unsigned();
            $table->foreign('idSolicitud')->references('id')->on('request')->onDelete('cascade');
            
            $table->integer('idContenido')->unsigned();
            $table->foreign('idContenido')->references('id')->on('content')->onDelete('cascade');
            
            $table->integer('idUsuarioOrigen')->unsigned();
            $table->foreign('idUsuarioOrigen')->references('id')->on('user')->onDelete('cascade');
            
            $table->integer('idUsuarioDestino')->unsigned();
            $table->foreign('idUsuarioDestino')->references('id')->on('user')->onDelete('cascade');
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
        Schema::dropIfExists('notification');
    }
}
