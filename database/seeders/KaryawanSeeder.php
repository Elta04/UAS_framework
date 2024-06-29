<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for 'karyawan' table
        $data = [
            [
                'nik' => '1234567890',
                'nama' => 'John Doe',
                'gender' => 'Male',
                'unit' => 'HR Department',
                'alamat' => '123 Main Street, City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '0987654321',
                'nama' => 'Jane Doe',
                'gender' => 'Female',
                'unit' => 'IT Department',
                'alamat' => '456 Park Avenue, Town',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ];

        // Insert data into 'karyawan' table
        DB::table('karyawan')->insert($data);
    }
}
