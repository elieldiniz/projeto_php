<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->company,                  // Nome da empresa
        'site' => $faker->domainName,               // Domínio/site
        'uf' => $faker->stateAbbr,                   // Sigla do estado (ex: SP, RJ)
        'email' => $faker->companyEmail,            // Email corporativo
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
