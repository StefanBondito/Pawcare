<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('item')->insert([
            'id' => $faker->unique()->numberBetween(1, 99),
            'name' => $faker->word(),
            'price' => $faker->randomNumber(5, true),
            'type' => $faker->word(),
            'fk_shop_user_id' => $faker->unique()->numberBetween(1, 99)
        ]);
    }
}
