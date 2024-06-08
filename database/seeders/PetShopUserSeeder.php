<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PetShopUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('pet_shop_user')->insert([
            'id' => $faker->unique()->numberBetween(1, 99),
            'fk_account_id' => $faker->unique()->numberBetween(1, 99),
            'fk_payment_id' => $faker->numberBetween(1, 10),
            'fk_contact_id' => $faker->numberBetween(1, 10),
            'address' => $faker->address(),
            'shop_name' => $faker->word(),
            'dateCreated' => now(),
        ]);
    }
}
