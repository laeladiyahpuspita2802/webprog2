@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Data Alternative</h3>
            <div class="row">
                <!-- <a href="#">
                    <button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-refresh"></i> Refresh</button>
                </a> -->
                <!-- TABLE STRIPED -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Alternative</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_crt as $DC)
                        <form action="{{ route('postalt') }}" method="post">
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
                                    <button type="submit"><i class="fa fa-refresh"></i>Refresh</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Toko</th>
                                    <th>Harga Produk</th>
                                    <th>Keamanan Transaksi</th>
                                    <th>Kualitas Produk</th>
                                    <th>Jenis Pengiriman</th>
                                    <th>Proses Transaksi</th>
                                    <th>Keterangan</th>
                                    <th>Gambar Toko</th>
                                    <!-- <th>Hasil AHP</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @if(isset($data_pilih))
                                @if($data_pilih->count() > 0)
                                @foreach($data_pilih as $DP)
                                <tr>
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>{{ $DP->toko_online }}</td>
                                    <td>Rp.{{ $DP->harga_produk }}</td>
                                    <td>{{ $DP->keamanan_transaksi }}</td>
                                    <td>{{ $DP->kualitas_produk }} </td>
                                    <td>{{ $DP->jenis_pengiriman }}</td>
                                    <td>{{ $DP->proses_transaksi }}</td>
                                    <td>{{ $DP->keterangan }}</td>
                                    <td><img src="{{ url('/data_file/'.$DP->gambar) }}" alt="{{ $DP->gambar }}" width="200px" height="100px"></td>
                                    <td></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">Data tidak tersedia</td>
                                </tr>
                                @endif
                                @else
                                <tr>
                                    <td colspan="6">Data tidak tersedia</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE STRIPED -->
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection