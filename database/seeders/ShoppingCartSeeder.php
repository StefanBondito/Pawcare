<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('shopping_carts')->insert([
            'id' => $faker->unique()->numberBetween(1, 99),
            'fk_user_receiver' => $faker->unique()->numberBetween(1, 99),
            'fk_shop_sender' => $faker->unique()->numberBetween(1, 99),
            'cart_price' => $faker->randomNumber(5, true),
            'cart_total_items' => $faker->numberBetween(1, 99),
            'dateAdded' => now(),
        ]);
    }
}
