<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ShoppingCartContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('shopping_cart_contents')->insert([
            'fk_cart_id' => $faker->unique()->numberBetween(1, 99),
            'fk_item_id' => $faker->unique()->numberBetween(1, 99),
            'item_count' => $faker->numberBetween(1, 10),
        ]);
    }
}
