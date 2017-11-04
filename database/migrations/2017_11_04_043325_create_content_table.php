<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('contenido');
            $table->enum('tipo',['Texto','Imagen','Audio','Video']);
            $table->integer('visible');
            $table->date('fechaSubida');
            $table->string('titulo');
            $table->string('descripcionContenido');
            $table->integer('activo');
            $table->integer('idUsuario');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
