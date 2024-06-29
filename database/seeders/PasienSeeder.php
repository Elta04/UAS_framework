<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for 'pasien' table
        $data = [
            [
                'nama' => 'Maria',
                'gender' => 'Female',
                'lahir' => '1990-05-15',
                'status' => 'Belum Menikah',
                'alamat' => 'Jl. Merdeka No. 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Michael',
                'gender' => 'Male',
                'lahir' => '1985-08-20',
                'status' => 'Menikah',
                'alamat' => 'Jl. Bahagia No. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ];

        // Insert data into 'pasien' table
        DB::table('pasien')->insert($data);
    }
}
