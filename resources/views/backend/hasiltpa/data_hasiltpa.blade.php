@extends('backend/dashboard')
  <!-- Content Wrapper. Contains page content -->
@section('content')

   
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Hasil Peserta</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Hasil</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>NPM</th>
								<th>Nama Peserta</th>
								<th>Soal</th>
								<th>Benar</th>
								<th>Salah</th>
								<th>Nilai</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($benar as $br)

								<tr>
									<td></td>
									<td>{{$br->npm}}</td>
									<td>{{$br->NAMA}}</td>
									<td>{{$br->jumlah}}</td>
									<td>{{$br->hasil}}</td>
									<td>{{$br->salah}}</td>
									<td>{{$br->hasil*2}}</td>
									<td><a href="detail-hasil-tpa/{{$br->npm}}" class="btn btn-sm btn-warning">Detail</a><a href="cetak-hasil-tpa/{{$br->npm}}" class="btn btn-sm btn-primary">Cetak</a></td>
								</tr>
							@endforeach 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection