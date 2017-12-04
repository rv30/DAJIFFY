<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => $faker->name,
        'userName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\request::class, function (Faker\Generator $faker) {
    static $password;

    return [
  		'estado'=>$faker->numberBetween(1,3),
		'idUsuarioSolicitante'=>$faker->numberBetween(1,10),
		'idUsuarioResponde'=>$faker->numberBetween(1,10),
    ];
});

$factory->define(App\ContentModel::class, function (Faker\Generator $faker) {
    static $password;

    return [
       	'content'=>str_random(30),
		'tipo'=>$faker->numberBetween(1,2),
		'visible'=>$faker->boolean(),
		'titulo'=>$faker->name,
		'descripcionContenido'=>$faker->paragraph(3, true),
		'activo'=>$faker->boolean(),
		'idUsuario'=>$faker->numberBetween(1,10),
    ];
});

$factory->define(App\NotificationModel::class, function (Faker\Generator $faker) {
    static $password;

    return [
		'tipo'=>$faker->numberBetween(1,3),
		'visto'=>$faker->boolean(),
		'idSolicitud'=>$faker->numberBetween(1,50),
		'idContenido'=>$faker->numberBetween(1,50),
		'idUsuarioOrigen'=>$faker->numberBetween(1,10),
		'idUsuarioDestino'=>$faker->numberBetween(1,10),
    ];
});
