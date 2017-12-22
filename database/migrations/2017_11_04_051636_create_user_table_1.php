<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('userName')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('fechaNacimiento')->nullable();
            $table->enum('genero',['masculino','femenino'])->nullable();
            $table->string('avatar')->nullable();
            //$table->binary('portada')->nullable();
            $table->enum('tipoUsuario',['Administrador','Usuario'])->nullable();
            $table->integer('privado')->nullable();
            $table->integer('activo')->nullable();
            $table->integer('bloqueado')->nullable();
            //$table->integer('idCiudad')->unsigned()->nullable();
            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function up2()
    {

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
