<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'logo' => 'http://lorempixel.com/100/100/business/',
        'website' => $faker->domainName
    ];
});
