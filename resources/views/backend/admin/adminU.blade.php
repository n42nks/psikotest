@extends('backend/dashboard')
@section('admin', 'active')
@section('header')
    <h1>Tambah Data Admin</h1>
    <br>
    <!-- <a class="btn btn-primary" href="{{ url('/admin/pemilikkos/tambah') }}">Tambah Data</a> -->
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Lengkapi Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('admin/dataadmin/update1') }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                    @method('post')
                    <input type="hidden" name="IdAdmin" value="{{ $admin->IdAdmin }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 ">Nama</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ old('nama') == '' ? $admin->nama : old('nama') }}">
                                @if ($errors->has('nama'))
                                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 ">User Name</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="username" id="username"
                                    value="{{ old('username') == '' ? $admin->username : old('username') }}">
                                @if ($errors->has('usernm'))
                                    <small class="text-danger">{{ $errors->first('usernm') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 ">Password</label>

                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" id="password"
                                    value="{{ old('password') == '' ? $admin->password : old('password') }}">
                                @if ($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Hak Akses</label>
                            <div class="col-sm-8">
                                <select name="hak" class="form-control" id="hak">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                </select>
                                @if ($errors->has('hak'))
                                    <small class="text-danger">{{ $errors->first('hak') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!--/.col (right) -->
    </div>
@endsection
