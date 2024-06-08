<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('accounts')->insert([
            'id' => 1,
            'email' => 'natehiggers@gmail.com',
            'fk_account_type_id' => 1,
            'password' => '1_H4t3_N1gg3rs',
            'dateCreated' => now()
        ]);

        DB::table('accounts')->insert([
            'id' => $faker->unique()->numberBetween(2, 99),
            'email' => $faker->unique()->userName.'@gmail.com',
            'fk_account_type_id' => 3,
            'password' => Hash::make($faker->password),
            'dateCreated' => $faker->dateTime()
        ]);
    }
}
