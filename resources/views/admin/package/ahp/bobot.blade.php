@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Perhitungan Matriks</h3>
			<div class="row">
				<div class="panel col-md-6 col-md-offset-3">
					<div class="panel-heading">
						<h3 class="panel-title">Nilai Perbandingan Matriks</h3>
					</div>
					<div class="panel-body">
						<form action="{{ route('postbobot') }}" method="post">
							@csrf
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama Kriteria 1</th>
										<th>Nilai Banding</th>
										<th>Nama Kriteria 2</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Jenis Pengiriman</td>
										<td>
											<select class="form-control" name="cbhg">
												<option value="1">Jenis Pengiriman Sama Penting dengan Proses Transaksi (Nilai = 1)</option>
												<option value="5">Jenis Pengiriman Lebih Penting daripada Proses Transaksi (Nilai = 5)</option>
												<option value="3">Jenis Pengiriman Cukup Penting daripada Proses Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Proses Transaksi</td>
									</tr>
									<tr>
										<td>Jenis Pengiriman</td>
										<td>
											<select class="form-control" name="cbhs">
												<option value="1">Jenis Pengiriman Sama Penting dengan Kualitas Produk (Nilai = 1)</option>
												<option value="5">Jenis Pengiriman Lebih Penting daripada Kualitas Produk (Nilai = 5)</option>
												<option value="3">Jenis Pengiriman Cukup Penting daripada Kualitas Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Kualitas Produk</td>
									</tr>
									<tr>
										<td>Jenis Pengiriman</td>
										<td>
											<select class="form-control" name="cbhk">
												<option value="1">Jenis Pengiriman Sama Penting dengan Keamanan Transaksi (Nilai = 1)</option>
												<option value="5">Jenis Pengiriman Lebih Penting daripada Keamanan Transaksi (Nilai = 5)</option>
												<option value="3">Jenis Pengiriman Cukup Penting daripada Keamanan Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Keamanan Transaksi</td>
									</tr>
									<tr>
										<td>Jenis Pengiriman</td>
										<td>
											<select class="form-control" name="cbhl">
												<option value="1">Jenis Pengiriman Sama Penting dengan Harga Produk (Nilai = 1)</option>
												<option value="5">Jenis Pengiriman Lebih Penting daripada Harga Produk (Nilai = 5)</option>
												<option value="3">Jenis Pengiriman Cukup Penting daripada Harga Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga Produk</td>
									</tr>
									<tr>
										<td>Jenis Pengiriman</td>
										<td>
											<select class="form-control" name="cbhl">
												<option value="1">Jenis Pengiriman Sama Penting dengan Jenis Pengiriman (Nilai = 1)</option>
												<option value="5">Jenis Pengiriman Lebih Penting daripada Jenis Pengiriman (Nilai = 5)</option>
												<option value="3">Jenis Pengiriman Cukup Penting daripada Jenis Pengiriman (Nilai = 3)</option>
											</select>
										</td>
										<td>Jenis Pengiriman</td>
									</tr>
									<tr>
										<td>Proses Transaksi</td>
										<td>
											<select class="form-control" name="cbgh">
												<option value="1">Proses Transaksi Sama Penting dengan Jenis Pengiriman (Nilai = 1)</option>
												<option value="5">Proses Transaksi Lebih Penting daripada Jenis Pengiriman (Nilai = 5)</option>
												<option value="3">Proses Transaksi Cukup Penting daripada Jenis Pengiriman (Nilai = 3)</option>
											</select>
										</td>
										<td>Jenis Pengiriman</td>
									</tr>
									<tr>
										<td>Proses Transaksi</td>
										<td>
											<select class="form-control" name="cbgs">
												<option value="1">Proses Transaksi Sama Penting dengan Kualitas Produk (Nilai = 1)</option>
												<option value="5">Proses Transaksi Lebih Penting daripada Kualitas Produk (Nilai = 5)</option>
												<option value="3">Proses Transaksi Cukup Penting daripada Kualitas Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Kualitas Produk</td>
									</tr>
									<tr>
										<td>Proses Transaksi</td>
										<td>
											<select class="form-control" name="cbgk">
												<option value="1">Proses Transaksi Sama Penting dengan Keamanan Transaksi (Nilai = 1)</option>
												<option value="5">Proses Transaksi Lebih Penting daripada Keamanan Transaksi (Nilai = 5)</option>
												<option value="3">Proses Transaksi Cukup Penting daripada Keamanan Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Keamanan Transaksi</td>
									</tr>
									<tr>
										<td>Proses Transaksi</td>
										<td>
											<select class="form-control" name="cbgl">
												<option value="1">Proses Transaksi Sama Penting dengan Harga Produk (Nilai = 1)</option>
												<option value="5">Proses Transaksi Lebih Penting daripada Harga Produk (Nilai = 5)</option>
												<option value="3">Proses Transaksi Cukup Penting daripada Harga Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga Produk</td>
									</tr>
									<tr>
										<td>Proses Transaksi</td>
										<td>
											<select class="form-control" name="cbgl">
												<option value="1">Proses Transaksi Sama Penting dengan Proses Transaksi (Nilai = 1)</option>
												<option value="5">Proses Transaksi Lebih Penting daripada Proses Transaksi (Nilai = 5)</option>
												<option value="3">Proses Transaksi Cukup Penting daripada Proses Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Proses Transaksi</td>
									</tr>
									<tr>
										<td>Kualitas Produk</td>
										<td>
											<select class="form-control" name="cbsh">
												<option value="1">Kualitas Produk Sama Penting dengan Jenis Pengiriman (Nilai = 1)</option>
												<option value="5">Kualitas Produk Lebih Penting daripada Jenis Pengiriman (Nilai = 5)</option>
												<option value="3">Kualitas Produk Cukup Penting daripada Jenis Pengiriman (Nilai = 3)</option>
											</select>
										</td>
										<td>Jenis Pengiriman</td>
									</tr>
									<tr>
										<td>Kualitas Produk</td>
										<td>
											<select class="form-control" name="cbsg">
												<option value="1">Kualitas Produk Sama Penting dengan Proses Transaksi (Nilai = 1)</option>
												<option value="5">Kualitas Produk Lebih Penting daripada Proses Transaksi (Nilai = 5)</option>
												<option value="3">Kualitas Produk Cukup Penting daripada Proses Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Proses Transaksi</td>
									</tr>
									<tr>
										<td>Kualitas Produk</td>
										<td>
											<select class="form-control" name="cbsk">
												<option value="1">Kualitas Produk Sama Penting dengan Keamanan Transaksi (Nilai = 1)</option>
												<option value="5">Kualitas Produk Lebih Penting daripada Keamanan Transaksi (Nilai = 5)</option>
												<option value="3">Kualitas Produk Cukup Penting daripada Keamanan Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Keamanan Transaksi</td>
									</tr>
									<tr>
										<td>Kualitas Produk</td>
										<td>
											<select class="form-control" name="cbsl">
												<option value="1">Kualitas Produk Sama Penting dengan Harga Produk (Nilai = 1)</option>
												<option value="5">Kualitas Produk Lebih Penting daripada Harga Produk (Nilai = 5)</option>
												<option value="3">Kualitas Produk Cukup Penting daripada Harga Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga Produk</td>
									</tr>
									<tr>
										<td>Kualitas Produk</td>
										<td>
											<select class="form-control" name="cbsl">
												<option value="1">Kualitas Produk Sama Penting dengan Kualitas Produk (Nilai = 1)</option>
												<option value="5">Kualitas Produk Lebih Penting daripada Kualitas Produk (Nilai = 5)</option>
												<option value="3">Kualitas Produk Cukup Penting daripada Kualitas Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Kualitas Produk</td>
									</tr>
									<tr>
										<td>Keamanan Transaksi</td>
										<td>
											<select class="form-control" name="cbkh">
												<option value="1">Keamanan Transaksi Sama Penting dengan Jenis Pengiriman (Nilai = 1)</option>
												<option value="5">Keamanan Transaksi Lebih Penting daripada Jenis Pengiriman (Nilai = 5)</option>
												<option value="3">Keamanan Transaksi Cukup Penting daripada Jenis Pengiriman (Nilai = 3)</option>
											</select>
										</td>
										<td>Jenis Pengiriman</td>
									</tr>
									<tr>
										<td>Keamanan Transaksi</td>
										<td>
											<select class="form-control" name="cbkg">
												<option value="1">Keamanan Transaksi Sama Penting dengan Proses Transaksi (Nilai = 1)</option>
												<option value="5">Keamanan Transaksi Lebih Penting daripada Proses Transaksi (Nilai = 5)</option>
												<option value="3">Keamanan Transaksi Cukup Penting daripada Proses Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Proses Transaksi</td>
									</tr>
									<tr>
										<td>Keamanan Transaksi</td>
										<td>
											<select class="form-control" name="cbks">
												<option value="1">Keamanan Transaksi Sama Penting dengan Kualitas Produk (Nilai = 1)</option>
												<option value="5">Keamanan Transaksi Lebih Penting daripada Kualitas Produk (Nilai = 5)</option>
												<option value="3">Keamanan Transaksi Cukup Penting daripada Kualitas Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Kualitas Produk</td>
									</tr>
									<tr>
										<td>Keamanan Transaksi</td>
										<td>
											<select class="form-control" name="cbkl">
												<option value="1">Keamanan Transaksi Sama Penting dengan Harga Produk (Nilai = 1)</option>
												<option value="5">Keamanan Transaksi Lebih Penting daripada Harga Produk (Nilai = 5)</option>
												<option value="3">Keamanan Transaksi Cukup Penting daripada Harga Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga Produk</td>
									</tr>
									<tr>
										<td>Keamanan Transaksi</td>
										<td>
											<select class="form-control" name="cbkl">
												<option value="1">Keamanan Transaksi Sama Penting dengan Keamanan Transaksi (Nilai = 1)</option>
												<option value="5">Keamanan Transaksi Lebih Penting daripada Keamanan Transaksi (Nilai = 5)</option>
												<option value="3">Keamanan Transaksi Cukup Penting daripada Keamanan Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Keamanan Transaksi</td>
									</tr>
									<tr>
										<td>Harga Produk</td>
										<td>
											<select class="form-control" name="cblh">
												<option value="1">Harga Produk Sama Penting dengan Jenis Pengiriman (Nilai = 1)</option>
												<option value="5">Harga Produk Lebih Penting daripada Jenis Pengiriman (Nilai = 5)</option>
												<option value="3">Harga Produk Cukup Penting daripada Jenis Pengiriman (Nilai = 3)</option>
											</select>
										</td>
										<td>Jenis Pengiriman</td>
									</tr>
									<tr>
										<td>Harga Produk</td>
										<td>
											<select class="form-control" name="cblg">
												<option value="1">Harga Produk Sama Penting dengan Proses Transaksi (Nilai = 1)</option>
												<option value="5">Harga Produk Lebih Penting daripada Proses Transaksi (Nilai = 5)</option>
												<option value="3">Harga Produk Cukup Penting daripada Proses Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Proses Transaksi</td>
									</tr>
									<tr>
										<td>Harga Produk</td>
										<td>
											<select class="form-control" name="cblk">
												<option value="1">Harga Produk Sama Penting dengan Keamanan Transaksi (Nilai = 1)</option>
												<option value="5">Harga Produk Lebih Penting daripada Keamanan Transaksi (Nilai = 5)</option>
												<option value="3">Harga Produk Cukup Penting daripada Keamanan Transaksi (Nilai = 3)</option>
											</select>
										</td>
										<td>Keamanan Transaksi</td>
									</tr>
									<tr>
										<td>Harga Produk</td>
										<td>
											<select class="form-control" name="cbls">
												<option value="1">Harga Produk Sama Penting dengan Kualitas Produk (Nilai = 1)</option>
												<option value="5">Harga Produk Lebih Penting daripada Kualitas Produk (Nilai = 5)</option>
												<option value="3">Harga Produk Cukup Penting daripada Kualitas Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Kualitas Produk</td>
									</tr>
									<tr>
										<td>Harga Produk</td>
										<td>
											<select class="form-control" name="cbls">
												<option value="1">Harga Produk Sama Penting dengan Harga Produk (Nilai = 1)</option>
												<option value="5">Harga Produk Lebih Penting daripada Harga Produk (Nilai = 5)</option>
												<option value="3">Harga Produk Cukup Penting daripada Harga Produk (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga Produk</td>
									</tr>
								</tbody>
								<br>
							</table>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-block">Hitung</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-warning btn-block" onclick="kembalibobot();">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<script>
                        function kembalibobot() {
                            window.location.href = "/admin/alternative";
                        }
                    </script>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection