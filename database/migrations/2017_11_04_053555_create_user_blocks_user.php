<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBlocksUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userBlocksUser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuarioAdmin')->unsigned();
            $table->foreign('idUsuarioAdmin')->references('id')->on('user')->onDelete('cascade');

            $table->integer('idUsuarioBaneado')->unsigned();
            $table->foreign('idUsuarioBaneado')->references('id')->on('user')->onDelete('cascade');

            $table->integer('idMotivo')->unsigned();
            $table->foreign('idMotivo')->references('id')->on('motiveBan')->onDelete('cascade');

            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('razon');
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
        Schema::dropIfExists('userBlocksUser');
    }
}
