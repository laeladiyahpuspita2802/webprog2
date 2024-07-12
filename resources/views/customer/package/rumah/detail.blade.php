@extends('customer.layouts.applogin')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Detail Toko Online</h2>
            <ol>
                <li><a href="/home">Home</a></li>
                <li>Detail Toko Online</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    @if($data_rumah->count() > 0)
    @foreach($data_rumah as $DR)
    <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="{{ url('/data_file/'.$DR->gambar) }}" class="img-fluid" alt="{{ $DR->gambar }}">
                <img src="{{ url('/data_file/'.$DR->gambar_produk) }}" class="img-fluid" alt="{{ $DR->gambar_produk }}">
            </div>

            <div class="portfolio-info">
                <h3>Nama Toko Online : {{ $DR->toko_online }}</h3>
                <ul>
                    <li><strong>Jenis Pengiriman</strong>: {{ $DR->jenis_pengiriman }}</li>
                    <li><strong>Kualitas Produk</strong>: {{ $DR->kualitas_produk }}</li>
                    <li><strong>Keamanan Transaksi</strong>: {{ $DR->keamanan_transaksi }}</li>
                    <li><strong>Harga Produk</strong>: {{ $DR->harga_produk }}</li>
                    <li><strong>Proses Transaksi</strong>: {{ $DR->proses_transaksi }}</li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>Lain - Lain</h2>
            <p>
                {{ $DR->keterangan }}
            </p>
        </div>

    </div>
    @endforeach
    @else
    <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            </div>

            <div class="portfolio-info">
                <h3>Nama Toko Online : </h3>
                <ul>
                <li><strong>Jenis Pengiriman</strong</li>
                    <li><strong>Kualitas Produk</strong></li>
                    <li><strong>Keamanan Transaksi</strong></li>
                    <li><strong>Harga Produk</strong></li>
                    <li><strong>Proses Transaksi</strong></li>
                </ul>
            </div>

        </div>

        <div class="portfolio-description">
            <h2>Lain - Lain</h2>
            <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
        </div>

    </div>
    @endif
</section><!-- End Portfolio Details Section -->
@endsection