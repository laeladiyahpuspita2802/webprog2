<?php

namespace Database\Seeders;
use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternative::create([
            'toko_online' => 'PGE Official',
            'harga_produk' => '450',
            'keamanan_transaksi' => '80',
            'kualitas_produk' => '70',
            'jenis_pengiriman' => '10',
            'proses_transaksi' => '50',
        ]);
        Alternative::create([
            'toko_online' => 'dinafshn',
            'harga_produk' => '550',
            'keamanan_transaksi' => '60',
            'kualitas_produk' => '90',
            'jenis_pengiriman' =>'10',
            'proses_transaksi' => '80',
        ]);
        Alternative::create([
            'toko_online' => 'By Finding',
            'harga_produk' => '500',
            'keamanan_transaksi' =>'90',
            'kualitas_produk' => '80',
            'jenis_pengiriman' => '9',
            'proses_transaksi' => '70',
        ]);
        Alternative::create([
            'toko_online' => 'Domani_id',
            'harga_produk' => '500',
            'keamanan_transaksi' => '70',
            'kualitas_produk' => '70',
            'jenis_pengiriman' => '8',
            'proses_transaksi' => '60',
        ]);
        Alternative::create([
            'toko_online' => 'N&A FASHION',
            'harga_produk' => '400',
            'keamanan_transaksi' => '80',
            'kualitas_produk' => '60',
            'jenis_pengiriman' => '9',
            'proses_transaksi' => '70',
        ]);
    }
}
