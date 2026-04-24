@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/petunjuk','active')
@section('eng/soal/display','')
@section('datasoaleng','active')
@section('header') 
<h1>Tambah Data Petunjuk</h1>
<br>
@endsection
@section('content')
    <form action="{{url('admin/petunjuk/eng/save')}}" method="post">
        {{csrf_field()}}
        @if($data->id != null)
          <input type="hidden" name="id" value="{{$data->id}}">
        @endif
        <br>
        <div class="form-group">
          <label>Petunjuk</label>
          <textarea class="form-control" rows="5" name="petunjuk" id="petunjuk" placeholder="Masukan Data Petunjuk">{{$data->petunjuk}}</textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
@endsection
