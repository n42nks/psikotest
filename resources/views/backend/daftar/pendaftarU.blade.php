@extends('backend/dashboard')
@section('pendaftar','active')
@section('header') 
<h1>Tambah Data Pendaftar</h1>
<br>
<!-- <a class="btn btn-primary" href="{{url('/admin/pemilikkos/tambah')}}">Tambah Data</a> -->
@endsection
@section('content')
  <div class="row">
<div class="col-lg-12">
    
    <div class="box">
        <div class="box-header with-border">
        <span class="text-primary" >* Isikan data dengan benar</span>
        <form method="POST" action="{{url('admin/pendaftar/update1')}}" style="padding:5px 10px 0px 40px;">
            @csrf
            @method('post')
            <input type="hidden" name="npm" value="{{$pendaftar->npm}}">
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Npm</label>
            <div class="col-sm-5">
                <input type="text" disabled="" class="form-control" value="{{ old('npm') == "" ? $pendaftar->npm : old('npm') }}" >
                @if ($errors->has('npm'))
                <small class="text-danger">{{ $errors->first('npm') }}</small> 
                @endif
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" name="nama" id="nama" class="form-control"  placeholder="Masukan Nama" value="{{ old('nama') == "" ? $pendaftar->nama : old('nama') }}" > 
                @if ($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small> 
                @endif
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kota</label>
            <div class="col-sm-5">
                <input type="text" name="kota" id="kota" class="form-control"  placeholder="Masukan Kota" value="{{ old('kota') == "" ? $pendaftar->kota : old('kota') }}" >
                @if ($errors->has('kota'))
                <small class="text-danger">{{ $errors->first('kota') }}</small> 
                @endif
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">sekolah</label>
            <div class="col-sm-5">
                <input type="text" name="sekolah" id="sekolah" class="form-control"  placeholder="Masukan Sekolah" value="{{ old('sekoalah') == "" ? $pendaftar->sekolah : old('sekolah') }}" >
                @if ($errors->has('sekolah'))
                <small class="text-danger">{{ $errors->first('sekolah') }}</small> 
                @endif
            </div>
            </div>    
           
            <div class="form-group row">
                <div class="col-sm-3 "></div>
                <div class="col-sm-5">
                <button type="reset" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    
</div>
</div>
@endsection