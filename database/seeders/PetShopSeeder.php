<?php

namespace Database\Seeders;

use App\Models\PetShop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PetShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        PetShop::create([
            'user_id' => 2,
            'address' => $faker->address(),
            'shop_name' => "Petcare",
        ]);
    }
}
