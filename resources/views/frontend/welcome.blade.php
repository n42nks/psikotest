@extends('frontend/dashboard')
@section('pendaftar', 'active')

@section('content')
    <div class="container">
        <div class="login-box" style="margin-top: 40px;">

            <div class="login-logo">
                <b style="color:#243A6B;">Login CAT</b>
                <p style="font-size:13px; color:#6c757d;">Sistem Ujian Perangkat Desa</p>
            </div>

            <div class="login-box-body" style="border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1);">

                <p class="login-box-msg">Masukkan No Pendaftaran dan Password</p>

                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}

                    <!-- NO PENDAFTARAN -->
                    <div class="form-group has-feedback">
                        <label>No Pendaftaran</label>
                        <input type="text" class="form-control" name="npm" placeholder="Masukkan No Pendaftaran">
                        <span class="fa fa-user form-control-feedback"></span>

                        @if ($errors->has('npm'))
                            <small class="text-danger">{{ $errors->first('npm') }}</small>
                        @endif
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" name="nama" placeholder="Masukkan Password">
                        <span class="fa fa-lock form-control-feedback"></span>

                        @if ($errors->has('nama'))
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        @endif
                    </div>

                    <!-- INFO -->
                    <div class="alert" style="background:#e3f2fd; border-radius:8px; font-size:12px;">
                        <b>Contoh Password:</b><br>
                        Password adalah tanggal lahir format <b>YYYYMMDD</b><br>
                        Contoh: <b>20001201</b>
                    </div>

                    <!-- BUTTON -->
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-block"
                                style="background:#F97316; color:white; font-weight:bold; border-radius:6px;">
                                Login
                            </button>
                        </div>

                        <div class="col-xs-6">
                            <a href="{{ url('daftarsiswa') }}" class="btn btn-default btn-block" style="border-radius:6px;">
                                Registrasi
                            </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var stslogin = "{{ session()->get('stslogin') }}";

            if (stslogin == 2) {
                swal(
                    'Gagal Pastikan Masukan Username Password dengan Benar',
                    '',
                    'error'
                );
            }

            @if (session('success'))
                swal({
                    title: 'Pendaftaran Berhasil',
                    type: 'success',
                    html: `
            <b>No Pendaftaran : {{ session('nopendaftaran') }}</b> <br>
            <b>Password : {{ session('password') }} </b><br><br>
            Simpan data ini untuk login ujian CAT
        `
                });
            @endif

        });
    </script>
@endsection
