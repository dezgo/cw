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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Component::class, function (Faker\Generator $faker) {
    $categories = App\ComponentCategory::all()->lists('id')->toArray();
    return [
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(500, 40000),
        'speed' => $faker->numberBetween(1,500),
        'category_id' => $faker->randomElement($categories),
    ];
});

$factory->define(App\ComponentCategory::class, function (Faker\Generator $faker) {
    $image_paths = [
        'cs_antivirus_sm.png',
        'cs_build_sm.png',
        'cs_cpu_sm.png',
        'cs_hard_drive_sm.png',
        'cs_input_sm.png',
        'cs_install_sm.png',
        'cs_mobo_sm.png',
        'cs_monitor.png',
        'cs_onsite_sm.png',
        'cs_optical_sm.png',
        'cs_ram_sm.png',
        'cs_software_sm.png',
        'cs_tower_sm.png',
        'cs_wireless_card_sm.png',
    ];

    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'image_path' => $faker->randomElement($image_paths),
    ];
});
