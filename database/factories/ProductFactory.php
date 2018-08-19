<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' =>  $faker->numerify('Shoes #'),
        'category_id' => $faker->randomElement($array = array ('1','2','3')),
        'weight' => $faker->randomElement($array = array ( '39', '40','41','42','43')),
        'stock' => $faker->numberBetween($min = 1, $max = 100),
        'price' => $faker->numberBetween($min = 75, $max = 999).'000',
        'description' => $faker-> paragraph($nbSentences = 5, $variableNbSentences = true)
    ];
});
