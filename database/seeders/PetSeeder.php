<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pet::create([
            'name' => 'Choco',
            'type' => 'Dog',
            'breed' => 'Rottweiler',
            'dateOfBirth' => '2022-05-24',
            'age' => 2,
            'user_id' => 3,
        ]);
    }
}
