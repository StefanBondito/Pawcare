<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('permission')->insert([
            'id' => $faker->unique()->numberBetween(1, 99),
            'name' => $faker->word(),
            'enable' => $faker->numberBetween(0,1),
            'dateAdded' => now(),
        ]);
    }
}
