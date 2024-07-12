<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable = ['toko_online','harga_produk','keamanan_transaksi','kualitas_produk','jenis_pengiriman','proses_transaksi','gambar','ahp'];
    protected $dates = ['deleted_at'];
}
