<?php

namespace Database\Seeders;

use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCriteria::create([
            'code' => 'KS001',
            'name' => 'Harga_Produk',
            'nilaik' => '450',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS002',
            'name' => 'Harga_Produk',
            'nilaik' => '550',
            'nilaib' => '0.2',
        ]);
        SubCriteria::create([
            'code' => 'KS003',
            'name' => 'Harga_Produk',
            'nilaik' => '500',
            'nilaib' => '0.2',
        ]);
        SubCriteria::create([
            'code' => 'KS004',
            'name' => 'Harga_Produk',
            'nilaik' => '500',
            'nilaib' => '0.2',
        ]);
        SubCriteria::create([
            'code' => 'KS005',
            'name' => 'Harga_Produk',
            'nilaik' => '400',
            'nilaib' => '0.333333333',
        ]);
        SubCriteria::create([
            'code' => 'KS006',
            'name' => 'Keamanan_Transaksi',
            'nilaik' => '80',
            'nilaib' => '5',
        ]);
        SubCriteria::create([
            'code' => 'KS007',
            'name' => 'Keamanan_Transaksi',
            'nilaik' => '60',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS008',
            'name' => 'Keamanan_Transaksi',
            'nilaik' => '90',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS009',
            'name' => 'Keamanan_Transaksi',
            'nilaik' => '70',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0010',
            'name' => 'Keamanan_Transaksi',
            'nilaik' => '80',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0011',
            'name' => 'Kualitas_Produk',
            'nilaik' => '70',
            'nilaib' => '5',
        ]);
        SubCriteria::create([
            'code' => 'KS0012',
            'name' => 'Kualitas_Produk',
            'nilaik' => '90',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0013',
            'name' => 'Kualitas_Produk',
            'nilaik' => '80',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0014',
            'name' => 'Kualitas_Produk',
            'nilaik' => '70',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0015',
            'name' => 'Kualitas_Produk',
            'nilaik' => '60',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0016',
            'name' => 'Jenis_Pengiriman',
            'nilaik' => '10',
            'nilaib' => '5',
        ]);
        SubCriteria::create([
            'code' => 'KS0017',
            'name' => 'Jenis_Pengiriman',
            'nilaik' => '10',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0018',
            'name' => 'Jenis_Pengiriman',
            'nilaik' => '9',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0019',
            'name' => 'Jenis_Pengiriman',
            'nilaik' => '8',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0020',
            'name' => 'Jenis_Pengiriman',
            'nilaik' => '9',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0021',
            'name' => 'Proses_Transaksi',
            'nilaik' => '50',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0022',
            'name' => 'Proses_Transaksi',
            'nilaik' => '80',
            'nilaib' => '0.333333333',
        ]);
        SubCriteria::create([
            'code' => 'KS0023',
            'name' => 'Proses_Transaksi',
            'nilaik' => '70',
            'nilaib' => '0.333333333',
        ]);
        SubCriteria::create([
            'code' => 'KS0024',
            'name' => 'Proses_Transaksi',
            'nilaik' => '60',
            'nilaib' => '0.333333333',
        ]);
        SubCriteria::create([
            'code' => 'KS0025',
            'name' => 'Proses_Transaksi',
            'nilaik' => '70',
            'nilaib' => '1',
        ]);
    }
}
