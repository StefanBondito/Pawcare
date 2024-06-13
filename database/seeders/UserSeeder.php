<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};
use Faker\Factory as Faker;
use App\Models\User;

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

        User::create([
            'id' => 1,
            'email' => 'stefanbondito@gmail.com',
            'fk_account_type_id' => 1,
            'password' => Hash::make('1234'),
            'dateCreated' => now()
        ]);

        User::create([
            'id' => 2,
            'email' => 'chira@gmail.com',
            'fk_account_type_id' => 2,
            'password' => Hash::make("asdasd"),
            'dateCreated' => now()
        ]);

        User::create([
            'id' => 3,
            'email' => 'chirazu@gmail.com',
            'fk_account_type_id' => 3,
            'password' => Hash::make("asdasd"),
            'dateCreated' => now()
        ]);

        User::factory(5)->create();
    }
}
