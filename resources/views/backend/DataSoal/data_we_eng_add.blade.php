@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/soal','active')
@section('eng/soal/display','')
@section('datasoaleng','active')
@section('header') 
<h1>Tambah Data Soal Write Ekspresion</h1>
<br>
@endsection
@section('content')
    <form action="{{url('admin/we/eng/save')}}" method="POST">
        {{csrf_field()}}
        @if($data->id_soal != null)
          <input type="hidden" name="id" value="{{$data->id_soal}}">
        @endif
        <br>
        <div class="form-group">
          <label>Soal</label>
          <textarea class="form-control" rows="2" name="soal" id="soal" placeholder="Masukan Soal">{{$data->soal}}</textarea>
        </div>
        <br>
        <div class="form-group">
          <label>Petunjuk</label>
          <select name="id_petunjuk" name="id_cerita" class="form-control">
            @foreach ($petunjuks as $petunjuk)
              <option {{$data->id_petunjuk == $petunjuk->id ? 'selected' : ''}} value="{{$petunjuk->id}}">{{$petunjuk->id}}. {{$petunjuk->petunjuk}}</option>
            @endforeach
          </select>
        <div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban A :</label>
          <input value="{{$data->opsiA}}" type="text" class="form-control" placeholder="Masukkan Jawaban A" id="a" name="a">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban B :</label>
          <input value="{{$data->opsiB}}" type="text" class="form-control" placeholder="Masukkan Jawaban B" id="b" name="b">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban C :</label>
          <input value="{{$data->opsiC}}" type="text" class="form-control" placeholder="Masukkan Jawaban C" id="c" name="c">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban D :</label>
          <input value="{{$data->opsiD}}" type="text" class="form-control" placeholder="Masukkan Jawaban D" id="d" name="d">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Kunci Jawaban :</label>
          <input value="{{$data->key}}" type="text" class="form-control" placeholder="Masukkan Kunci Jawaban" id="key" name="key">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
@endsection
