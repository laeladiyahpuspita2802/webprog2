<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alternative extends Model
{
    use SoftDeletes;

    protected $fillable = ['toko_online', 'harga_produk','keamanan_transaksi', 'kualitas_produk', 'jenis_pengiriman', 'proses_transaksi', 'keterangan', 'gambar','gambar_produk'];
    protected $dates = ['deleted_at'];

}
