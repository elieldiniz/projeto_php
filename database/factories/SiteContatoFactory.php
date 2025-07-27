<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'motivo_contato' => $faker->numberBetween(1, 3), // Assuming 5 different reasons
        'mensagem' => $faker->text(200), // Random message text
    ];
});
