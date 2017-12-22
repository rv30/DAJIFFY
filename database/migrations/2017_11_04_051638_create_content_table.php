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
            $table->string('content');
            $table->enum('tipo',['Imagen','Video']);
            $table->integer('visible')->nullable();
            $table->string('titulo');
            $table->text('descripcionContenido');
            $table->integer('activo');
            $table->integer('idUsuario')->unsigned()->nullable();
            //$table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('content', function($table) {
        $table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');
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
