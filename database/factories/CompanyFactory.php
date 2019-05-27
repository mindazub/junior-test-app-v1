<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'email' => $faker->email,
        'logo' => 'logo',
        'website' => $faker->domainName
    ];
});
