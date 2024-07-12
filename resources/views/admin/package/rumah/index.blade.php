@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Toko Online</h3>
			<div class="row">
				<a href="/admin/rumah/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Toko Online</button>
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Toko Online</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Toko Online</th>
									<th>Harga Produk</th>
									<th>Keamanan Transaksi</th>
									<th>Kualitas Produk</th>
									<th>Jenis Pengiriman</th>
									<th>Proses Transaksi</th>
									<th width="300px">Keterangan</th>
									<th>Gambar Toko</th>
									<th width="250px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_rumah->count() > 0)
								@foreach($data_rumah as $DR)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DR->toko_online }}</td>
									<td>Rp. {{ $DR->harga_produk }}</td>
									<td>{{ $DR->keamanan_transaksi }}</td>
									<td>{{ $DR->kualitas_produk }} </td>
									<td>{{ $DR->jenis_pengiriman }}</td>
									<td>{{ $DR->proses_transaksi }}</td>
									<td>{{ $DR->keterangan }}</td>
									<td><img src="{{ url('/data_file/'.$DR->gambar) }}" alt="{{ $DR->gambar }}" width="200px" height="100px"></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">
											<a href="/admin/rumah/formedit/{{ $DR->id }}" style="color:white;">Update</a>
										</button>
										<button type="button" class="btn btn-danger btn-toastr">
											<a href="/admin/rumah/hapusrumah/{{ $DR->toko_online }}" style="color:white;">Delete</a>
										</button>
									</td>
								</tr>
								@endforeach
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