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
            $table->string('nombre');
            $table->string('correo');
            $table->string('contrasenia');
            $table->date('fechaNaciemiento');
            $table->enum('genero',['masculino','femenino']);
            $table->binary('avatar');
            $table->binary('portada');
            $table->enum('tipoUsuario',['Administrador','Usuario']);
            $table->integer('privado');
            $table->integer('activo');
            $table->integer('bloqueado');
            $table->integer('idCiudad')->unsigned();
            
            
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
        Schema::dropIfExists('user');
    }
}
