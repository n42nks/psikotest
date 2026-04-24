@extends('backend/dashboard')
  <!-- Content Wrapper. Contains page content -->
@section('content')

    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Anda yakin akan menghapus data ini?</h3>
            </div>
            <form action="{{ route('Soal.delete') }}" method="post" role="form">
                <div class="box-body">
                    @csrf
                    <input type="hidden" name="id_soal" value="{{$Soal->id_soal}}">
                    <div class="form-group">
                        <label for="soal">Soal</label>
                        <input type="text" class="form-control" id="soal" name="soal" value="{!!$Soal->soal!!}"disabled>
                    </div>
                </div>

                <div class="card-footer" align="right">
                  <a href="{{ route('Soal.index') }}" class="btn btn-sm btn-default">Tidak</a>
                  <input type="submit" class="btn btn-sm btn-danger" value="Ya, hapus data">
                </div>
            </form>
        </div>
    </div>
@endsection