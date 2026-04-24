@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/sound','active')
@section('eng/soal/display','')
@section('datasoaleng','active')
@section('header') 
<h1>Tambah Data Petunjuk</h1>
<br>
@endsection
@section('content')
    <form action="{{url('admin/sound/eng/save')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @if($data->id != null)
          <input type="hidden" name="id" value="{{$data->id}}">
          <div class="form-group">
            <audio style="width: 100%" controls src="data:audio/ogg;base64,{{$data->sound}}" >
          </div>
        @endif
        <br>
        <div class="form-group">
          <label for="exampleInputFile">Pilih File Audio</label>
          <input type="file" accept=".mp3,audio/*" id="sound" name="sound">

          <p class="help-block">Pilih file audio yang ingin di simpan</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
@endsection
@section('js')
    <script>

    </script>
@endsection