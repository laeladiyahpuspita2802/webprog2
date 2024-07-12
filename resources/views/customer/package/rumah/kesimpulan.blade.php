@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Kesimpulan</h3>
            @foreach($data_rumah as $DR)
            <button type="button" class="btn btn-info btn-toastr">
                <a href="/ahp/bobot/kesimpulan/cetak/{{ $DR->toko_online }}" target="_blank" style="color:white;">Cetak</a>
            </button>
            <button type="button" class="btn btn-danger btn-toastr">
                <a href="/ahp/bobot" style="color:white;">Hitung Ulang</a>
            </button>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="margin-top: 30px;"><strong>Laporan Hasil Rekomendasi Toko Online</strong></h3>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Nama Toko : {{ $DR->toko_online }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="text-center">
                                        <img src="{{ url('/data_file/'.$DR->gambar) }}" alt="{{ $DR->gambar }}" width="500px" height="500px">
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                        <p>Berikut merupakan hasil rekomendasi toko online yang dihitung berdasarkan nilai bobot kriteria yang anda berikan</p>
                        <p>Hasil nilai ahp yang telah dihitung adalah sebesar <strong>{{ $DR->ahp }}</strong></p>
                        <p>Untuk melihat detail toko online lebih lanjut Anda menekan link sebagai berikut : <a href="/detail/{{ $DR->toko_online }}">{{ $DR->toko_online }}</a></p>
                        <p style="margin-top: 500px;">
                            <div class="copyright">
                                &copy; Copyright <strong><span>SPK Online SHOP</span></strong>. All Rights Reserved
                            </div>
                        </p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
</div>
@endsection