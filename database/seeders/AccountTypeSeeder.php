<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountType::create(['name' => 'Admin', 'id' => 1]);
        AccountType::create(['name' => 'Pet Shop', 'id' => 2]);
        AccountType::create(['name' => 'User', 'id' => 3]);
    }
}
