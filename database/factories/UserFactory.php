<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\product;
use App\product_image;
use App\order;
use App\state;
use App\faq;
use App\article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(1000, 10000),
        'category_id'  => rand(1,4),
        'excerpt' => $faker->paragraph(5)
        
    ];
});

$factory->define(article::class, function (Faker $faker) {
    return [
        'problem'  => $faker->paragraph(10), 
        'cause' => $faker->paragraph(14), 
        'effect' => $faker->paragraph(3), 
        'solution' => $faker->paragraph(6), 
        'usage' => $faker->paragraph(16), 
        'testimony' => $faker->paragraph(13), 
        'links' => $faker->paragraph(1), 
        'product_id' => product::all()->random()->id,
        'conclution' => $faker->paragraph(20)
        
    ];
});

$factory->define(order::class, function (Faker $faker) {
    return [


        'full_name' => $faker->name,
        'user_id' => User::all()->random()->id,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->phoneNumber,
        'other_mobile'  => $faker->phoneNumber,
        'address' => $faker->address,
        'state_id'  => state::all()->random()->id, 
        'qty' => $faker->numberBetween(1,5), 
        'product_id' => product::all()->random()->id, 
        'tracking_id' => $faker->numberBetween(1000,5000), 
        'order_status' => $faker->randomElement([order::UNPROCESSED,order::DELIVERED,order::TRANSIT,order::RETURNED]), 
    ];
});

$factory->define(product_image::class, function (Faker $faker) {
    return [

        'src' => $faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg']),
        'product_id' => product::all()->random()->id, 
       
    ];
});

$factory->define(faq::class, function (Faker $faker) {
    return [

        'title' => $faker->paragraph(1),
        'answer' => $faker->paragraph(2),
       
    ];
});

$factory->define(state::class, function (Faker $faker) {
    return [

        'name' => $faker->word,
        
       
    ];
});
