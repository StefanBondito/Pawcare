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
            'email' => 'nathan@gmail.com',
            'fk_account_type_id' => 1,
            'password' => Hash::make('1234'),
            'dateCreated' => now()
        ]);

        DB::table('accounts')->insert([
            'id' => 2,
            'email' => 'chira@gmail.com',
            'fk_account_type_id' => 3,
            'password' => Hash::make("asdasd"),
            'dateCreated' => now()
        ]);

        DB::table('accounts')->insert([
            'id' => 3,
            'email' => 'chirazu@gmail.com',
            'fk_account_type_id' => 2,
            'password' => Hash::make("asdasd"),
            'dateCreated' => now()
        ]);

        DB::table('accounts')->insert([
            'id' => $faker->unique()->numberBetween(3, 99),
            'email' => $faker->unique()->userName.'@gmail.com',
            'fk_account_type_id' => 3,
            'password' => Hash::make($faker->password),
            'dateCreated' => $faker->dateTime()
        ]);
    }
}
