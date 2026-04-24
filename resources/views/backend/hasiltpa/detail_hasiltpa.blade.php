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
			<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
			  <div class="card-header">NPM : {{ $benarr[0]->npm }}</div>
			  <div class="card-body">
			    <h4 class="card-title">Nama : {{$benarr[0]->nama}}</h4>
			    <p class="card-text">
			    	Kota : {{$benarr[0]->kota}}
			    </p>
			    <p class="card-text">
			    	Sekolah : {{$benarr[0]->sekolah}}
			    </p>
			  </div>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Pertanyaan</th>
								<th>Kunci Jawaban</th>
								<th>Jawaban Peserta</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($benarr as $br)

								<tr>
									<td>{{$br->id_soal}}</td>
									<td>{{$br->soal}}</td>
									<td>{{$br->jawaban}}</td>
									<td>{{$br->jawaban_peserta}}</td>
									<td>@if($br->jawaban == $br->jawaban_peserta)
										Benar
										@else
										<span style="color: red;">Salah</span>
										@endif
									</td>
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