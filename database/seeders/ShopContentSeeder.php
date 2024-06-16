<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShoppingCartContent;

class ShopContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShoppingCartContent::create([
            'cart_id' => 1,
            'item_id' => 1,
            'item_count' => 2
        ]);

        ShoppingCartContent::create([
            'cart_id' => 1,
            'item_id' => 2,
            'item_count' => 1
        ]);
    }
}
