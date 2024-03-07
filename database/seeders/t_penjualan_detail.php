<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class t_penjualan_detail extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    $data = [
        ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000000, 'jumlah' => 1],
        ['penjualan_id' => 2, 'barang_id' => 2, 'harga' => 5000000, 'jumlah' => 1],
        ['penjualan_id' => 2, 'barang_id' => 3, 'harga' => 2000, 'jumlah' => 5],
        ['penjualan_id' => 3, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 3],
        ['penjualan_id' => 3, 'barang_id' => 5, 'harga' => 500000, 'jumlah' => 1],
        ['penjualan_id' => 3, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 3],
        ['penjualan_id' => 4, 'barang_id' => 7, 'harga' => 29000, 'jumlah' => 2],
        ['penjualan_id' => 4, 'barang_id' => 8, 'harga' => 12000, 'jumlah' => 4],
        ['penjualan_id' => 5, 'barang_id' => 9, 'harga' => 2500, 'jumlah' => 3],
        ['penjualan_id' => 5, 'barang_id' => 10, 'harga' => 24000, 'jumlah' => 1],
        ['penjualan_id' => 6, 'barang_id' => 9, 'harga' => 2500, 'jumlah' => 4],
        ['penjualan_id' => 7, 'barang_id' => 10, 'harga' => 24000, 'jumlah' => 2],
        ['penjualan_id' => 7, 'barang_id' => 1, 'harga' => 10000000, 'jumlah' => 1],
        ['penjualan_id' => 7, 'barang_id' => 2, 'harga' => 500000, 'jumlah' => 2],
        ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 2000, 'jumlah' => 2],
        ['penjualan_id' => 8, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 1],
        ['penjualan_id' => 9, 'barang_id' => 5, 'harga' => 500000, 'jumlah' => 3],
        ['penjualan_id' => 9, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 2],
        ['penjualan_id' => 10, 'barang_id' => 7, 'harga' => 29000, 'jumlah' => 1],
        ['penjualan_id' => 10, 'barang_id' => 8, 'harga' => 12000, 'jumlah' => 2],
        ['penjualan_id' => 1, 'barang_id' => 9, 'harga' => 2500, 'jumlah' => 2],
        ['penjualan_id' => 2, 'barang_id' => 10, 'harga' => 24000, 'jumlah' => 3],
        ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000000, 'jumlah' => 1],
        ['penjualan_id' => 4, 'barang_id' => 2, 'harga' => 500000, 'jumlah' => 2],
        ['penjualan_id' => 5, 'barang_id' => 3, 'harga' => 2000, 'jumlah' => 5],
        ['penjualan_id' => 6, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 3],
        ['penjualan_id' => 7, 'barang_id' => 5, 'harga' => 500000, 'jumlah' => 1],
        ['penjualan_id' => 8, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 3],
        ['penjualan_id' => 9, 'barang_id' => 7, 'harga' => 29000, 'jumlah' => 2],
        ['penjualan_id' => 10, 'barang_id' => 8, 'harga' => 12000, 'jumlah' => 4],
    ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}