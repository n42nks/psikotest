@extends('backend/dashboard')
@section('datasoal','active')
@section('header') 
<h1>Edit Data Soal</h1>
<br>
@endsection
@section('content')
    <form action="{{url('/admin/soal/'.$tbsoal->Idsoal.'/update')}}" method="POST">
        {{csrf_field()}}
        <div class="col">
        <input type="hidden" id="Idsoal" name="Idsoal" value="{{$tbsoal->Idsoal}}">
        <label for="text">Jawaban A :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban A" id="k_D" name="k_D" value="{{$tbsoal->k_D}}">
        </div>
        <br>
        <div>
        <label for="text">Jawaban B :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban B" id="k_I" name="k_I" value="{{$tbsoal->k_I}}">
        </div>
        <br>
        <div>
        <label for="text">Jawaban C :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban C" id="k_S" name="k_S" value="{{$tbsoal->k_S}}">
        </div>
        <br>
        <div>
        <label for="text">Jawaban D :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban D" id="k_C" name="k_C" value="{{$tbsoal->k_C}}">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>  
@endsection
