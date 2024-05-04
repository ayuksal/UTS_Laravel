<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list')->insert([
            [
                'kode_barang'=>'BRS-01',
                'nama_barang' => 'Beras Rojo Lele',
                'price' => '12550',
                'unit_id' => 1,
                'description' => 'Beras Rojo Lele adalah beras berkualitas nomer satu di Indonesia',
            ],
            [
                'kode_barang' => 'WTR-01',
                'nama_barang' => 'Club',
                'price' => '22500',
                'unit_id' => 5,
                'description' => 'Air mineral Club diproduksi dari sumber air alami, melalui tahapan proses yang higenis, dengan menggunakan standard teknologi tinggi. Saat ini tersedia dengan logo baru',
            ],
            [
                'kode_barang' => 'WTR-02',
                'nama_barang' => 'Club Galon',
                'price' => '52500',
                'unit_id' => 3,
                'description' => 'Air mineral Club diproduksi dari sumber air alami, melalui tahapan proses yang higenis, dengan menggunakan standard teknologi tinggi. Saat ini tersedia dengan logo baru',
            ],
        ]);
    }
}