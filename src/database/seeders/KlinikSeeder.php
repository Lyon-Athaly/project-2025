<?php

namespace Database\Seeders;
use App\Models\Klinik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KlinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Klinik::insert([
            ['id' => 1, 'nama' => 'Klinik Gading Medika', 'alamat' => 'Jl. Gading Raya No.1', 'telepon' => '0211234567'],
            ['id' => 2, 'nama' => 'Klinik Mentari Sehat', 'alamat' => 'Jl. Mentari No.12', 'telepon' => '0217654321'],
            ['id' => 3, 'nama' => 'Klinik Cempaka Mulia', 'alamat' => 'Jl. Cempaka No.88', 'telepon' => null],
        ]);
    }
}
