<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/document_number.php';

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0,1)
    ];
});

$factory->state(Client::class, Client::TYPE_PERSON_PHYSICAL, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'date_birth' => $faker->date(),
        'document_number' => $cpfs[array_rand($cpfs, 1)],
        'sex' => rand(1,10) % 2 == 0 ? 'm' : 'f',
        'marital_status' => rand(1, 3),
        'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null
    ];
});

$factory->state(Client::class, Client::TYPE_PERSON_COMMPANY, function (Faker $faker) {
    $cnpjs = cnpjs();
    return [
        'document_number' => $cnpjs[array_rand($cnpjs, 1)],
        'company_name' => $faker->company
    ];
});