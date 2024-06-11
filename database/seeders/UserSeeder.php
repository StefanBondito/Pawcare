<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('users')->insert([
            'id' => 2,
            'fk_account_id' => 3,
            'fk_pet_id' => $faker->unique()->numberBetween(1, 99),
            'fk_cart_id' => $faker->numberBetween(1, 10),
            'fk_payment_id' => $faker->numberBetween(1, 10),
            'name' => 'Chira',
            'phone' => $faker->phoneNumber(),
            'address' => $faker->address(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // DB::table('users')->insert([
        //     'id' => $faker->unique()->numberBetween(2, 99),
        //     'fk_account_id' => $faker->unique()->numberBetween(4, 99),
        //     'fk_pet_id' => $faker->unique()->numberBetween(1, 99),
        //     'fk_cart_id' => $faker->numberBetween(1, 10),
        //     'fk_payment_id' => $faker->numberBetween(1, 10),
        //     'name' => $faker->name(),
        //     'phone' => $faker->phoneNumber(),
        //     'address' => $faker->address(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
