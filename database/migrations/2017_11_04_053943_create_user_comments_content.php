<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCommentsContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userCommentsContent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');

            $table->integer('idContenido')->unsigned();
            $table->foreign('idContenido')->references('id')->on('content')->onDelete('cascade');

            $table->string('comentario');
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
        Schema::dropIfExists('userCommentsContent');
    }
}
