<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'company_id' => function () {
            return factory(Company::class)->create()->id;
        },
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});
