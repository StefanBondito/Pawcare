<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccTypeJuncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('account_type_junction')->insert([
            'fk_account_type_id' => $faker->unique()->numberBetween(1, 99),
            'fk_account_permission_id' => $faker->unique()->numberBetween(1, 99),
        ]);
    }
}
