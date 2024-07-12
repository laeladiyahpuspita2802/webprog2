<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbandinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbandingan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kriteria')->unique();
            $table->string('harga_produk');
            $table->string('keamanan_transaksi');
            $table->string('kualitas_produk');
            $table->string('jenis_pengiriman');
            $table->string('proses_transaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbandingan');
    }
}
