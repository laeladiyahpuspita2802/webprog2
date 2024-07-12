<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('toko_online')->unique();
            $table->string('harga_produk');
            $table->string('keamanan_transaksi');
            $table->string('kualitas_produk');
            $table->string('jenis_pengiriman');
            $table->string('proses_transaksi');
            $table->string('keterangan');
            $table->string('gambar');
            $table->string('gambar_produk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatives');
    }
}
