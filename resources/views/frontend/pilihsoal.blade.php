@extends('frontend/dashboard')
@section('pendaftar', 'active')
@section('atas')
    <header class="main-header">

        <!-- LOGO -->
        <a href="#" class="logo" style="background:#243A6B; border-right:1px solid rgba(255,255,255,0.1);">
            <!-- FULL -->
            <span class="logo-lg">
                <img src="{{ asset('img/asia-putih.png') }}" height="50">
                <span style="color:white; font-size:13px; font-weight:bold;">
                    Sistem CAT
                </span>
            </span>
        </a>

        <!-- NAVBAR -->
        <nav class="navbar navbar-static-top" style="background:#243A6B; border:none; box-shadow:0 2px 8px rgba(0,0,0,0.1);">

            <!-- RIGHT MENU -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    @yield('navbar-extra')

                    <!-- USER -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <img src="{{ asset('img/logo_tok1.png') }}" class="user-image"
                                style="border-radius:50%; border:2px solid #F97316;">

                            <span class="hidden-xs" style="color:white;">
                                {{ session()->get('nama') }}
                            </span>
                        </a>

                        <!-- DROPDOWN -->
                        <ul class="dropdown-menu">

                            <li class="user-header" style="background:#243A6B;">
                                <img src="{{ asset('img/logo_tok1.png') }}" class="img-circle" alt="User Image">

                                <p>
                                    Sistem CAT<br>
                                    <small>Seleksi Perangkat Desa</small>
                                </p>
                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-danger btn-flat">
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
@endsection
@section('navbar-extra')
    @if (session('status_test_selesai'))
        <li class="user user-menu">
            <a href="{{ url('/datahasil') }}">Hasil test</a>
        </li>
        <li class="user user-menu">
            <a href="{{ url('/info') }}">Informasi</a>
        </li>
    @endif
@endsection
@section('content')

    <div class="container">

        <h3 style="margin-bottom:20px; font-weight:bold;">
            <i class="fa fa-desktop text-primary"></i> Dashboard Pilihan Soal CAT
        </h3>

        <div class="row">

            <!-- CARD -->
            @php
                $menus = [
                    ['nama' => 'TWK', 'detail' => 'Tes Wawasan Kebangsaan', 'img' => 'atc.png', 'url' => '/peserta/1'],
                    [
                        'nama' => 'TIU',
                        'detail' => 'Tes Intelegensi Umum',
                        'img' => 'atc.png',
                        'url' => '/englishtest/2',
                    ],
                    [
                        'nama' => 'TKP',
                        'detail' => 'Tes Karakteristik Pribadi',
                        'img' => 'atc.png',
                        'url' => '/katatest/3',
                    ],
                    [
                        'nama' => 'PPD',
                        'detail' => 'Pengetahuan Pemerintahan Desa',
                        'img' => 'atc.png',
                        'url' => '/hitungtest/4',
                    ],
                    [
                        'nama' => 'PAPP',
                        'detail' => 'Pengetahuan Administrasi & Pelayanan Publik',
                        'img' => 'atc.png',
                        'url' => '/konsentest/5',
                    ],
                ];
            @endphp

            @foreach ($menus as $m)
                <div class="col-md-3">
                    <div class="box"
                        style="border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.08); margin-bottom:20px; transition:0.3s;">

                        <div class="box-body text-center">

                            <!-- ICON -->
                            <img src="{{ asset('img/' . $m['img']) }}" style="width:100px; margin-bottom:5px;">

                            <!-- TITLE -->
                            <h4 style="font-weight:bold; color:#243A6B;">
                                {{ $m['nama'] }}
                            </h4>

                            <!-- DESC -->
                            <p style="font-size:12px; color:#777;">
                                {{ strtolower($m['detail']) }}
                            </p>

                            <!-- BUTTON -->
                            <a href="{{ url($m['url']) }}">
                                <button class="btn btn-block"
                                    style="background:linear-gradient(90deg,#F97316,#FB923C); color:white; border-radius:8px;">
                                    <i class="fa fa-play"></i> Kerjakan
                                </button>
                            </a>

                        </div>

                    </div>
                </div>
            @endforeach

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
                    'Hayo Sudah Ngerjakan ya ..',
                    '',
                    'error'
                );
            }

            var ststpa = "{{ session()->get('ststpa') }}";

            if (ststpa == 1) {
                swal(
                    'Kerjakan Tes Wawasan Kebangsaan dulu ..',
                    '',
                    'error'
                );
            }
            var stsbig = "{{ session()->get('stsbig') }}";

            if (stsbig == 3) {
                swal(
                    'Kerjakan Aritmatika dulu ..',
                    '',
                    'error'
                );
            }

        });
    </script>
@endsection
