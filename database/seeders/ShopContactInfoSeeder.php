<?php

namespace Database\Seeders;

use App\Models\ShopContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ShopContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        ShopContactInfo::create([
            'id' => $faker->unique()->numberBetween(1, 99),
            'shop_phone' => $faker->phoneNumber(),
            'shop_email' => $faker->userName.'@gmail.com',
            'shop_twitter' => '@'.$faker->userName,
            'shop_instagram' => '@'.$faker->userName,
            'shop_facebook' => $faker->userName,
        ]);
    }
}
