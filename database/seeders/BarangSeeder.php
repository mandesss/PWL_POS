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
                'barang_id' =>1,
                'kategori_id' =>4,
                'barang_kode' => 'B001',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' =>2,
                'kategori_id' =>1,
                'barang_kode' => 'B002',
                'barang_nama' => 'Beras',
                'harga_beli' => 17000,
                'harga_jual' => 19500,
            ],
            [
                'barang_id' =>3,
                'kategori_id' =>2,
                'barang_kode' => 'B003',
                'barang_nama' => 'Sunscreen',
                'harga_beli' => 40000,
                'harga_jual' => 43000,
            ],
            [
                'barang_id' =>4,
                'kategori_id' =>1,
                'barang_kode' => 'B004',
                'barang_nama' => 'Telur',
                'harga_beli' => 14000,
                'harga_jual' => 16000,
            ],
            [
                'barang_id' =>5,
                'kategori_id' =>4,
                'barang_kode' => 'B005',
                'barang_nama' => 'Pensil',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' =>6,
                'kategori_id' =>5,
                'barang_kode' => 'B006',
                'barang_nama' => 'Teh Pucuk',
                'harga_beli' => 6000,
                'harga_jual' => 7500,
            ],
            [
                'barang_id' =>7,
                'kategori_id' =>2,
                'barang_kode' => 'B007',
                'barang_nama' => 'Bedak',
                'harga_beli' => 53000,
                'harga_jual' => 55000,
            ],
            [
                'barang_id' =>8,
                'kategori_id' =>3,
                'barang_kode' => 'B008',
                'barang_nama' => 'Tolak Angin',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' =>9,
                'kategori_id' =>4,
                'barang_kode' => 'B009',
                'barang_nama' => 'Penghapus',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' =>10,
                'kategori_id' =>5,
                'barang_kode' => 'B010',
                'barang_nama' => 'Es Krim',
                'harga_beli' => 5000,
                'harga_jual' => 6500,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}