<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {$data = [
        [
            'barang_id' => 1,
            'kategori_id' => 1,
            'barang_kode' => 'BRG001',
            'barang_nama' => 'Laptop',
            'harga_beli' => 5000000,
            'harga_jual' => 7500000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 2,
            'kategori_id' => 2,
            'barang_kode' => 'BRG002',
            'barang_nama' => 'Baju',
            'harga_beli' => 3000000,
            'harga_jual' => 4500000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 3,
            'kategori_id' => 3,
            'barang_kode' => 'BRG003',
            'barang_nama' => 'Sapu',
            'harga_beli' => 8000000,
            'harga_jual' => 12000000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 4,
            'kategori_id' => 4,
            'barang_kode' => 'BRG004',
            'barang_nama' => 'Car Battery',
            'harga_beli' => 500000,
            'harga_jual' => 750000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 5,
            'kategori_id' => 5,
            'barang_kode' => 'BRG005',
            'barang_nama' => 'Board Game',
            'harga_beli' => 200000,
            'harga_jual' => 300000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 6,
            'kategori_id' => 1,
            'barang_kode' => 'BRG006',
            'barang_nama' => 'Desktop PC',
            'harga_beli' => 7000000,
            'harga_jual' => 10000000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 7,
            'kategori_id' => 2,
            'barang_kode' => 'BRG007',
            'barang_nama' => 'Celana Jeans',
            'harga_beli' => 2500000,
            'harga_jual' => 3500000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 8,
            'kategori_id' => 3,
            'barang_kode' => 'BRG008',
            'barang_nama' => 'Vacuum Cleaner',
            'harga_beli' => 12000000,
            'harga_jual' => 15000000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 9,
            'kategori_id' => 4,
            'barang_kode' => 'BRG009',
            'barang_nama' => 'Motorcycle Battery',
            'harga_beli' => 800000,
            'harga_jual' => 1200000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'barang_id' => 10,
            'kategori_id' => 5,
            'barang_kode' => 'BRG010',
            'barang_nama' => 'Puzzle Game',
            'harga_beli' => 150000,
            'harga_jual' => 250000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
    
    DB::table('m_barang')->insert($data);
    
    }
}
