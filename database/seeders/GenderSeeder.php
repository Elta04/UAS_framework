<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for 'gender' table
        $data = [
            [
                'kelamin' => 'Male',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kelamin' => 'Female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ];

        // Insert data into 'gender' table
        DB::table('gender')->insert($data);
    }
}
