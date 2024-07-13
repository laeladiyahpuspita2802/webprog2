@extends('customer.layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SPK Toko Online</span></h2>
        <p class="animate__animated fanimate__adeInUp">Sistem pendukung keputusan berbasis website yang menggunakan tampilan bootstrap dan framework laravel, siap membantu anda dalam melakukan pengambilan keputusan</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">SPK Toko Online</h2>
        <p class="animate__animated animate__fadeInUp">Sistem pendukung keputusan ini mendukung untuk membuat keputusan dalam pemilihan toko online sesuai dengan kriteria yang anda inginkan</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">SPK Toko Online</h2>
        <p class="animate__animated animate__fadeInUp">Metode yang digunakan sistem ini dalam menghitung hasil kalkulasi adalah metode AHP. Analitycal Hierarchy Process (AHP) Adalah metode untuk memecahkan suatu situasi yang
komplek tidak terstruktur kedalam beberapa komponen dalam susunan yang hirarki, dengan memberi
nilai subjektif tentang pentingnya setiap variabel secara relatif, dan menetapkan variabel mana yang
memiliki prioritas paling tinggi guna mempengaruhi hasil pada situasi tersebut.</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Apa saja yang bisa dilakukan ?</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <p>
            Sistem Pendukung Keputusan dalam pemilihan toko online ini merupakan sistem informasi berbasis website yang dibangun menggunakan framework laravel.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Sistem ini bisa membantu anda dalam menentukan toko online yang anda inginkan </li>
            <li><i class="ri-check-double-line"></i> Sistem ini juga memiliki akurasi yang akurat dalam memberikan rekomendasi toko online yang anda inginkan </li>
            <li><i class="ri-check-double-line"></i> Sistem ini menyajikan ribuan data toko online terbaru yang diambil melalui database terpercaya</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Aplikasi ini dibuat untuk memudahkan pengguna dalam membuat keputusan atau sebagai alat referensi
            dalam pemilihan toko online yang diinginkan berdasarkan kriteria dan nilai yang bisa ditentukan sesuka hati
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in">
          <a class="nav-link active show" data-toggle="tab" href="#tab-1">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">Dapat diakses dimana saja kapan saja</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-toggle="tab" href="#tab-2">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Data toko online dari 15 toko</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-toggle="tab" href="#tab-3">
            <i class="ri-sun-line"></i>
            <h4 class="d-none d-lg-block">Lebih ringan dengan tampilan sederhana</h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
          <a class="nav-link" data-toggle="tab" href="#tab-4">
            <i class="ri-store-line"></i>
            <h4 class="d-none d-lg-block">Mudah digunakan</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Dapat akses kapanpun dan dimanapun anda berada</h3>
              <p class="font-italic">
                Sistem informasi ini dibangun dalam bentuk website yang menggunakan framework laravel dan juga tampilan bootstrap.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> a</li>
                <li><i class="ri-check-double-line"></i> b</li>
                <li><i class="ri-check-double-line"></i> c</li>
              </ul>
              <p>
                Sistem pendukung keputusan berbasis website yang menggunakan
                tampilan bootstrap dan framework laravel, siap membantu anda dalam melakukan pengambilan keputusan
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Memiliki data toko online lebih dari 15 data</h3>
              <p>
                Sehingga membuat anda mampu menentukan banyak pilihan sesuai dengan kriteria toko yang anda mau
              </p>
              <p class="font-italic">
                Dilengkapi dengan gambar yang menarik membuat tampilan pilihan toko terlihat lebih nyata
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Terdapat berbagai pilihan toko online</li>
                <li><i class="ri-check-double-line"></i> Setiap data memiliki data dan struktur gambar yang sesuai dengan realitas</li>
                <li><i class="ri-check-double-line"></i> c</li>
                <li><i class="ri-check-double-line"></i> d</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Menggunakan tampilan sederhana</h3>
              <p>
                Dengan menggunakan tampilan sederhana membuat proses
                untuk membuka laman website semakin lebih cepat dan ringan
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Menggunakan tampilan sederhana</li>
                <li><i class="ri-check-double-line"></i> Tidak menggunakan banyak tampilan gambar</li>
                <li><i class="ri-check-double-line"></i> Tidak terdapat iklan</li>
              </ul>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Mudah dalam proses penggunanaannya</h3>
              <p>
                Kami membuat tampilan dan struktur proses yang mudah dan berurutan sehingga
                dapat memudahkan pengguna dalam menggunakan sistem yang kami buat.
              </p>
              <p class="font-italic">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, ad?
                Quae officiis quod asperiores. At omnis tempora error totam nulla.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Urutan alur proses sistem yang sederhana</li>
                <li><i class="ri-check-double-line"></i> </li>
                <li><i class="ri-check-double-line"></i> </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-out">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Coba Sekarang ?</h3>
          <p>Lakukan uji coba sistem pendukung keputusan dalam pemilihan toko online hasil kalkulasi menggunakan metode ahp</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Try It Now !</a>
        </div>
      </div>
    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
      <h2>Batasan Aplikasi</h2>
        <p>Ruang Lingkup Aplikasi</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box" data-aos="zoom-in-left">
            <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="">Data Toko tidak terintegrasi</a></h4>
            <p class="description"> Data yang digunakan adalah data toko yang rekomendasi di Jawa Tengah.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
            <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href="">Data Kriteria yang tidak dinamis</a></h4>
            <p class="description">Data kriteria yang tersedia telah ditetapkan oleh pengembang aplikasi.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="">Daftar Alternatif yang tidak dinamis</a></h4>
            <p class="description">Alternatif yang tersedia untuk Sistem Pendukung Keputusan ini adalah beberapa daftar toko yang direkomendasikan.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
            <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Metode Pendukung Keputusan</a></h4>
            <p class="description">Sistem ini dirancang menggunakan metode Analytical Hierarchy Process.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
            <h4 class="title"><a href="">Sistem terintegrasi dengan database</a></h4>
            <p class="description"> Sistem berbasis website sehingga proses pengolahan data akan selalu real time, cepat, dan akurat.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Alternative</h2>
        <p>What we've recommend for you</p>
      </div>

      @foreach($data_crt as $DC)
      <!-- <form action="{{ route('postaltuser') }}" method="post"> -->
      <form action="{{ route('postaltuser') }}" method="post">
        @endforeach
        @csrf
        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
              <select class="form-control" name="cbname" id="cbname">
                @if($data_crt->count() > 0)
                @if(isset($data_crt))
                @foreach($data_crt as $DC)
                <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                @endforeach
                @else
                @foreach($data_crt as $DC)
                <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                @endforeach
                @endif
                @else
                <option value="none" disabled>Data alternative tidak tersedia</option>
                @endif
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <!-- <button type="submit"><i class="fa fa-refresh"></i>Refresh</button> -->
            <div class="text-center"><button type="submit">Refresh</button></div>
          </div>
        </div>
      </form>
      <br>
      <br>
      <!-- <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul> -->

      <div class="row portfolio-container" data-aos="fade-up">
        @if($data_rumah->count() > 0)
        @foreach($data_rumah as $DR)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{ url('/data_file/'.$DR->gambar) }}" class="img-fluid" alt="{{ $DR->gambar }}"></div>
          <div class="portfolio-info">
            <h4>Nama Toko : {{ $DR->toko_online }}</h4>
            <p>Rp. {{ $DR->harga_produk }}</p>
            <a href="{{ url('/data_file/'.$DR->gambar) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
          </div>
        </div>
        @endforeach
        @else
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
          </div>
        </div>
        @endif
      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
