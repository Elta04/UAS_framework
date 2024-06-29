<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for 'dokter' table
        $data = [
            [
                'nama' => 'Dr. John Doe',
                'spesialis' => 'Dokter Umum',
                'praktek' => 'RS Sehat Sentosa',
                'telepon' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dr. Jane Smith',
                'spesialis' => 'Dokter Gigi',
                'praktek' => 'Klinik Gigi Ceria',
                'telepon' => '987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ];

        // Insert data into 'dokter' table
        DB::table('dokter')->insert($data);
    }
}
