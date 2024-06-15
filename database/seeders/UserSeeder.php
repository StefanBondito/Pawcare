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
            'name' => 'Stefan',
            'email' => 'stefanbondito@gmail.com',
            'account_type' => 1,
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'id' => 2,
            'name' => 'Chira',
            'email' => 'chira@gmail.com',
            'account_type' => 2,
            'password' => Hash::make("asdasd"),
        ]);

        User::create([
            'id' => 3,
            'name' => 'Razu',
            'email' => 'chirazu@gmail.com',
            'account_type' => 3,
            'password' => Hash::make("asdasd"),
        ]);

        User::factory(5)->create();
    }
}
