<?php

namespace Database\Seeders;

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
        $acc_type = [
            ['type' => 'Admin', 'id' => 1, 'dateAdded' => now()],
            ['type' => 'Pet Shop', 'id' => 2, 'dateAdded' => now()],
            ['type' => 'User', 'id' => 3, 'dateAdded' => now()]
        ];

        DB::table('account_type')->insert($acc_type);
    }
}
