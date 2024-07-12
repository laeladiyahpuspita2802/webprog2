<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbandingan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kriteria', 'harga_produk','keamanan_transaksi', 'kualitas_produk', 'jenis_pengiriman', 'proses_transaksi'];
    protected $dates = ['deleted_at'];
}
