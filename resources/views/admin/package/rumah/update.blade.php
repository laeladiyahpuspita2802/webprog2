@extends('admin.layouts.app')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Toko Online</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Toko Online</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('updatetoko', ['id' => $data_rumah->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Nama Toko" name="toko_online" type="text" value="{{ $data_rumah->toko_online }}" readonly>
                            </div>
                            <br>
                            <p>Harga Produk</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="cbharga_produk">
                                    @if($data_crtlt->count() > 0)
                                        @foreach($data_crtlt as $DCLT)
                                            <option value="{{ $DCLT->nilaik }}" @if($DCLT->nilaik == $data_rumah->harga_produk) selected @endif>{{ $DCLT->nilaik }}</option>
                                        @endforeach
                                    @else
                                        <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Keamanan Transaksi</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="cbkeamanan_transaksi">
                                    @if($data_crtkm->count() > 0)
                                        @foreach($data_crtkm as $DCKM)
                                            <option value="{{ $DCKM->nilaik }}" @if($DCKM->nilaik == $data_rumah->keamanan_transaksi) selected @endif>{{ $DCKM->nilaik }}</option>
                                        @endforeach
                                    @else
                                        <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Kualitas Produk</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Kualitas Produk" name="kualitas_produk" type="number" value="{{ $data_rumah->kualitas_produk }}">
                            </div>
                            <br>
                            <p>Jenis Pengiriman</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Jenis Pengiriman" name="jenis_pengiriman" type="number" value="{{ $data_rumah->jenis_pengiriman }}">
                            </div>
                            <br>
                            <p>Proses Transaksi</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="cbproses_transaksi">
                                    @if($data_crtgr->count() > 0)
                                        @foreach($data_crtgr as $DCGR)
                                            <option value="{{ $DCGR->nilaik }}" @if($DCGR->nilaik == $data_rumah->proses_transaksi) selected @endif>{{ $DCGR->nilaik }}</option>
                                        @endforeach
                                    @else
                                        <option value="none" disabled>Data tidak tersedia</option>
                                    @endif
                                </select>
                            </div>
                            <br>
                            <p>Keterangan</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Keterangan" name="keterangan" type="text" value="{{ $data_rumah->keterangan }}">
                            </div>
                            <br>
                            <div class="">
                                <p>Gambar Toko</p>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <br>
                            <div class="">
                                <p>Gambar Produk Toko</p>
                                <input type="file" class="form-control" id="gambar_produk" name="gambar_produk">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalirumah();">Cancel</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <script>
                        function kembalirumah() {
                            window.location.href = "/admin/rumah";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
