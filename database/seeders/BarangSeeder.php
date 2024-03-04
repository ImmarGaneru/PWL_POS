<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'coke',
                'barang_nama' => 'coca cola',
                'harga_beli' => '9500',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'brd',
                'barang_nama' => 'bread',
                'harga_beli' => '3000',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'sop',
                'barang_nama' => 'soap',
                'harga_beli' => '4000',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'shp',
                'barang_nama' => 'shampoo',
                'harga_beli' => '9000',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'brm',
                'barang_nama' => 'broom',
                'harga_beli' => '20000',
                'harga_jual' => '30000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'dtr',
                'barang_nama' => 'detergent',
                'harga_beli' => '20000',
                'harga_jual' => '40000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'btl',
                'barang_nama' => 'bottle',
                'harga_beli' => '30000',
                'harga_jual' => '50000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'dpr',
                'barang_nama' => 'diaper',
                'harga_beli' => '10000',
                'harga_jual' => '20000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'smph',
                'barang_nama' => 'smartphone',
                'harga_beli' => '2000000',
                'harga_jual' => '1800000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'lpt',
                'barang_nama' => 'laptop',
                'harga_beli' => '9000000',
                'harga_jual' => '10000000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
