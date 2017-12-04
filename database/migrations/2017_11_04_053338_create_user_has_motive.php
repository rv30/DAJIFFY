<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasMotive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userHasMotive', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMotivo')->unsigned();
            $table->foreign('idMotivo')->references('id')->on('motiveBan')->onDelete('cascade');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');

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
        Schema::dropIfExists('userHasMotive');
    }
}
