<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFollowsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userFollowsUser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuarioSigue')->unsigned();
            $table->foreign('idUsuarioSigue')->references('id')->on('user')->onDelete('cascade');
            
            $table->integer('idUsuarioSeguido')->unsigned();
            $table->foreign('idUsuarioSeguido')->references('id')->on('user')->onDelete('cascade');

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
        Schema::dropIfExists('userFollowsUser');
    }
}
