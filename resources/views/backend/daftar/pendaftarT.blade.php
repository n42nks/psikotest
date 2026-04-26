@extends('backend/dashboard')
@section('pendaftar','active')
@section('header')
<h1>Tambah Data Peserta</h1>
<br>
<!-- <a class="btn btn-primary" href="{{url('/admin/pemilikkos/tambah')}}">Tambah Data</a> -->
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="box">
            <div class="box-header with-border">
            <span class="text-primary" >* Isikan data dengan benar</span>
            <form method="POST" action="{{url('/admin/pendaftar/tambah')}}" style="padding:5px 10px 0px 40px;">
                {{csrf_field()}}

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Daftar</label>
                <div class="col-sm-5">
                    <input type="date" name="tgl_daftar" id="tgl_daftar" class="form-control"  placeholder="Tanggal Daftar" >
                    @if ($errors->has('tgl_daftar'))
                    <small class="text-danger">{{ $errors->first('tgl_daftar') }}</small>
                    @endif
                </div>
                </div>


                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control"  placeholder="Masukan Nama" >
                    @if ($errors->has('nama'))
                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-5">
                    <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control"  placeholder="Tempat Lahir" >
                    @if ($errors->has('tmp_lahir'))
                    <small class="text-danger">{{ $errors->first('tmp_lahir') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" >
                    @if ($errors->has('tgl_lahir'))
                    <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select name="jk" class="form-control" id="jk">
                        <option>Pria</option>
                        <option>Wanita</option>
                    </select>
                    @if ($errors->has('jk'))
                    <small class="text-danger">{{ $errors->first('jk') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-5">
                    <select name="agama" class="form-control" id="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                    </select>
                    @if ($errors->has('agama'))
                    <small class="text-danger">{{ $errors->first('agama') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" name="alamat" id="alamat" class="form-control"  placeholder="Alamat" >
                    @if ($errors->has('alamat'))
                    <small class="text-danger">{{ $errors->first('alamat') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telepon</label>
                <div class="col-sm-5">
                    <input type="text" name="telp" id="telp" class="form-control"  placeholder="Telepon" >
                    @if ($errors->has('telp'))
                    <small class="text-danger">{{ $errors->first('telp') }}</small>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kota</label>
                <div class="col-sm-5">
                    <input type="text" name="kota" id="kota" class="form-control"  placeholder="Kota" >
                    @if ($errors->has('kota'))
                    <small class="text-danger">{{ $errors->first('kota') }}</small>
                    @endif
                </div>
                </div>

                    <div class="form-group row">
                    <div class="col-sm-3 "></div>
                    <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
@endsection
