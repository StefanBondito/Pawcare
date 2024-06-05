<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            ['name' => 'Stefan',
            'fk_account_id' => 1,
            ]
        ];
        DB::table('admins')->insert($admins);
    }
}
