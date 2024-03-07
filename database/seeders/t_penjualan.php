<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class t_penjualan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Dennis Parulian',
                'penjualan_kode' => '2314',
                'penjualan_tanggal' => Carbon::now()->addDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Jesica Octaivia',
                'penjualan_kode' => '213493',
                'penjualan_tanggal' => Carbon::now()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Pascalis Sandi Dewangga',
                'penjualan_kode' => '231945',
                'penjualan_tanggal' => Carbon::now()->addDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Bagus Arno',
                'penjualan_kode' => '123442',
                'penjualan_tanggal' => Carbon::now()->addDays(4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Muhammad Ariel Saputra',
                'penjualan_kode' => '9218342',
                'penjualan_tanggal' => Carbon::now()->addDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Febiola Lidya',
                'penjualan_kode' => '93921',
                'penjualan_tanggal' => Carbon::now()->addDays(6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Nurul Mustofa',
                'penjualan_kode' => '478293',
                'penjualan_tanggal' => Carbon::now()->addDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Brilyan',
                'penjualan_kode' => '47832',
                'penjualan_tanggal' => Carbon::now()->addDays(8),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Alimul',
                'penjualan_kode' => '387123',
                'penjualan_tanggal' => Carbon::now()->addDays(9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Jokowi Dodo',
                'penjualan_kode' => '123214',
                'penjualan_tanggal' => Carbon::now()->addDays(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}