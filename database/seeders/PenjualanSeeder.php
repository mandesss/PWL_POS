<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' =>1,
                'user_id' =>3,
                'pembeli' => 'Amanda',
                'penjualan_kode' => 'T001',
                'penjualan_tanggal' => '2024-03-07 08:40:00',
            ],
            [
                'penjualan_id' =>2,
                'user_id' =>3,
                'pembeli' => 'Vanika',
                'penjualan_kode' => 'T002',
                'penjualan_tanggal' => '2024-03-07 09:00:00',
            ],
            [
                'penjualan_id' =>3,
                'user_id' =>3,
                'pembeli' => 'Putri',
                'penjualan_kode' => 'T003',
                'penjualan_tanggal' => '2024-03-07 09:40:00',
            ],
            [
                'penjualan_id' =>4,
                'user_id' =>3,
                'pembeli' => 'Fitri',
                'penjualan_kode' => 'T004',
                'penjualan_tanggal' => '2024-03-07 10:20:00',
            ],
            [
                'penjualan_id' =>5,
                'user_id' =>3,
                'pembeli' => 'Rizky',
                'penjualan_kode' => 'T005',
                'penjualan_tanggal' => '2024-03-07 11:00:00',
            ],
            [
                'penjualan_id' =>6,
                'user_id' =>3,
                'pembeli' => 'Andini',
                'penjualan_kode' => 'T006',
                'penjualan_tanggal' => '2024-03-07 11:40:00',
            ],
            [
                'penjualan_id' =>7,
                'user_id' =>3,
                'pembeli' => 'Naufal',
                'penjualan_kode' => 'T007',
                'penjualan_tanggal' => '2024-03-07 12:20:00',
            ],
            [
                'penjualan_id' =>8,
                'user_id' =>3,
                'pembeli' => 'Kurniawan',
                'penjualan_kode' => 'T008',
                'penjualan_tanggal' => '2024-03-07 13:00:00',
            ],
            [
                'penjualan_id' =>9,
                'user_id' =>3,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'T009',
                'penjualan_tanggal' => '2024-03-07 13:40:00',
            ],
            [
                'penjualan_id' =>10,
                'user_id' =>3,
                'pembeli' => 'Taufiq',
                'penjualan_kode' => 'T010',
                'penjualan_tanggal' => '2024-03-07 14:20:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
