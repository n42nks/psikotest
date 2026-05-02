@extends('frontend/dashboard')
@section('pendaftar', 'active')
@section('css')
    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
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

@section('content')

    <div class="container">

        <h3 style="margin-bottom:20px; font-weight:bold;">
            <i class="fa fa-desktop text-primary"></i> Dashboard Pilihan Soal CAT
        </h3>
        @php
            $npm = session()->get('npm');

            $statusTes = DB::table('status_tes')->where('npm', $npm)->pluck('status', 'id_kategori');
        @endphp
        @php
            $menus = [
                [
                    'id' => 1,
                    'nama' => 'PU',
                    'detail' => 'Pancasila dan UUD 1945',
                    'img' => 'atc.png',
                    'url' => '/peserta/1',
                ],
                [
                    'id' => 2,
                    'nama' => 'PPPD',
                    'detail' => 'Pengetahuan Pemerintah / Pemerintah Desa',
                    'img' => 'atc.png',
                    'url' => '/englishtest/2',
                ],
                [
                    'id' => 3,
                    'nama' => 'PA',
                    'detail' => 'Pengetahuan Agama',
                    'img' => 'atc.png',
                    'url' => '/katatest/3',
                ],
                [
                    'id' => 4,
                    'nama' => 'PU',
                    'detail' => 'Pengetahuan Umum',
                    'img' => 'atc.png',
                    'url' => '/hitungtest/4',
                ],
                [
                    'id' => 5,
                    'nama' => 'AP',
                    'detail' => 'Administrasi Perkantoran',
                    'img' => 'atc.png',
                    'url' => '/konsentest/5',
                ],
                [
                    'id' => 6,
                    'nama' => 'PKTI',
                    'detail' => 'Pengetahuan Komputer dan Teknologi Informasi',
                    'img' => 'atc.png',
                    'url' => '/nalartest/6',
                ]
            ];
        @endphp
        @php
            $semuaSelesai = true;

            foreach ($menus as $m) {
                if (!isset($statusTes[$m['id']]) || $statusTes[$m['id']] != 1) {
                    $semuaSelesai = false;
                    break;
                }
            }
        @endphp
        @if ($semuaSelesai)
            <div
                style="
                background: linear-gradient(135deg, #22c55e, #16a34a);
                color: white;
                border-radius: 16px;
                padding: 30px;
                text-align: center;
                margin-bottom: 25px;
                box-shadow: 0 10px 25px rgba(34,197,94,0.3);
                position: relative;
                overflow: hidden;animation: fadeUp 0.6s ease;">

                <!-- ICON BESAR -->
                {{-- <div style="font-size:50px; margin-bottom:10px;">
                    🎉
                </div> --}}

                <!-- TITLE -->
                <h3 style="font-weight:bold; margin-bottom:10px;">
                    Semua Tes Selesai!
                </h3>

                <!-- SUBTITLE -->
                <p style="opacity:0.9; margin-bottom:20px;">
                    Kamu sudah menyelesaikan seluruh rangkaian soal CAT
                </p>

                <!-- BUTTON -->
                <a href="{{ url('/datahasil') }}"
                    style="
                    display:inline-block;
                    padding:12px 30px;
                    background:white;
                    color:#16a34a;
                    font-weight:bold;
                    border-radius:999px;
                    text-decoration:none;
                    transition:0.3s;
                "
                    onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    🔍 Lihat Hasil Test
                </a>

                <!-- DECORATION -->
                <div
                    style="
                    position:absolute;
                    top:-30px;
                    right:-30px;
                    width:120px;
                    height:120px;
                    background:rgba(255,255,255,0.15);
                    border-radius:50%;
                ">
                </div>

            </div>
        @endif

        <div class="row">

            <!-- CARD -->


            @php
                $bolehAkses = true;
            @endphp

            @foreach ($menus as $m)
                <div class="col-md-4">
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
                                {{ $m['detail'] }}
                            </p>

                            @php
                                $status = isset($statusTes[$m['id']]) ? $statusTes[$m['id']] : 0;
                            @endphp

                            @if ($status)
                                <!-- ✅ SUDAH SELESAI -->
                                <button class="btn btn-block" style="background:#22c55e; color:white;" disabled>
                                    ✔ Selesai
                                </button>
                            @elseif($bolehAkses && !$semuaSelesai)
                                <!-- ✅ BOLEH DIKERJAKAN -->
                                <a href="{{ url($m['url']) }}">
                                    <button class="btn btn-block"
                                        style="background:linear-gradient(90deg,#F97316,#FB923C); color:white; border-radius:8px;">
                                        ▶ Kerjakan
                                    </button>
                                </a>

                                @php
                                    $bolehAkses = false; // 🔥 setelah ini, berikutnya dikunci
                                @endphp
                            @else
                                <!-- 🔒 TERKUNCI -->
                                <button class="btn btn-block" style="background:#ccc; color:#666; cursor:not-allowed;"
                                    disabled>
                                    🔒 Terkunci
                                </button>
                            @endif

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
            localStorage.removeItem('currentSoal');
            localStorage.removeItem('sisaWaktu');
            localStorage.removeItem('totalSisa');

            // hapus semua jawaban
            for (let i = 1; i <= 100; i++) {
                localStorage.removeItem('pilihan' + i);
            }
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
