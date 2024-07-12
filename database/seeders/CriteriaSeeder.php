<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Criteria::create([
            'code' => 'C1',
            'name' => 'Harga Produk'
        ]);
        Criteria::create([
            'code' => 'C2',
            'name' => 'Keamanan Transaksi'
        ]);
        Criteria::create([
            'code' => 'C3',
            'name' => 'Kualitas Produk'
        ]);
        Criteria::create([
            'code' => 'C4',
            'name' => 'Jenis Pengiriman'
        ]);
        Criteria::create([
            'code' => 'C5',
            'name' => 'Proses Transaksi'
        ]);
    }
}
