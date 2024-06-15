<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemType;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemType::create(['name' => 'Cologne', 'id' => 1]);
        ItemType::create(['name' => 'Medicine', 'id' => 2]);
        ItemType::create(['name' => 'Tools', 'id' => 3]);
        ItemType::create(['name' => 'Toys', 'id' => 4]);
    }
}
