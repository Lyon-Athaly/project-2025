<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::insert([
            [
                'klinik_id' => 1,
                'nama' => 'Jonathan Erhandoyo',
                'no_ktp' => '3201010203040506',
                'tanggal_lahir' => '1995-04-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Gading Elok No.3'
            ],
            [
                'klinik_id' => 1,
                'nama' => 'Amelia Putri',
                'no_ktp' => '3201020203040507',
                'tanggal_lahir' => '2000-11-02',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Gading Indah No.10'
            ],
            [
                'klinik_id' => 2,
                'nama' => 'Fajar Ramadhan',
                'no_ktp' => '3201030203040508',
                'tanggal_lahir' => '1989-07-20',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Mentari Selatan No.5'
            ]
        ]);
    }
}
