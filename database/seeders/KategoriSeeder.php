<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'fb',
                'kategori_nama' => 'food-beverage',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'bth',
                'kategori_nama' => 'beauty-health',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'hc',
                'kategori_nama' => 'home-care',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'bk',
                'kategori_nama' => 'baby-kid',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'e',
                'kategori_nama' => 'electronics',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
