@extends('frontend/dashboard')
@section('pendaftar', 'active')

@section('css')
    <style>
        /* PROFILE CARD */
        .card-profile-modern {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .avatar {
            width: 90px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .name {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .info div {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .info span {
            color: #64748b;
        }

        .btn-logout {
            margin-top: 20px;
            display: block;
            padding: 10px;
            background: #ef4444;
            color: white;
            border-radius: 10px;
            text-decoration: none;
        }

        /* INSTRUCTION CARD */
        .card-instruction {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .header-instruction {
            background: linear-gradient(135deg, #243A6B, #1e2f57);
            color: white;
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .body-instruction {
            padding: 25px;
        }

        /* RULE */
        .rule {
            padding: 12px;
            border-radius: 10px;
            background: #f1f5f9;
            margin-bottom: 10px;
        }

        .rule.warning {
            background: #fef3c7;
        }

        /* FINAL WARNING */
        .final-warning {
            text-align: center;
            margin: 20px 0;
            color: #dc2626;
            font-weight: bold;
            font-size: 16px;
        }

        /* BUTTON */
        .btn-start {
            width: 100%;
            padding: 14px;
            background: linear-gradient(90deg, #22c55e, #16a34a);
            color: white;
            border-radius: 12px;
            border: none;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.3);
            transition: 0.3s;
        }

        .btn-start:hover {
            transform: translateY(-2px);
        }
    </style>
@endsection

@section('content')

<div class="container" style="margin-top:30px;">

    <div class="row">

        <!-- PROFILE -->
        <div class="col-md-4">
            <div class="card-profile-modern text-center">

                <img src="{{ asset('img/icon.png') }}" class="avatar">

                <h3 class="name">{{ session()->get('nama') }}</h3>

                <div class="info">
                    <div><span>No Peserta</span><b>{{ session()->get('npm') }}</b></div>
                    <div><span>Tanggal Lahir</span><b>{{ session()->get('tgl') }}</b></div>
                    <div><span>Kota</span><b>{{ session()->get('tmp') }}</b></div>
                </div>

                <a href="{{ url('/logout') }}" class="btn-logout">
                    Logout
                </a>

            </div>
        </div>

        <!-- INSTRUKSI -->
        <div class="col-md-8">
            <div class="card-instruction">

                <!-- HEADER -->
                <div class="header-instruction">
                    ⚠️ Petunjuk Pengerjaan
                </div>

                <!-- BODY -->
                <div class="body-instruction">

                    <div class="rule">
                        ⏱ Waktu pengerjaan: <b>4 Menit</b>
                    </div>

                    <div class="rule">
                        📄 Jumlah soal: <b>10 soal</b> (pilihan ganda)
                    </div>

                    <div class="rule">
                        🚫 Tidak bisa kembali ke soal sebelumnya
                    </div>

                    <div class="rule warning">
                        ⚡ Jawablah dengan yakin dan teliti
                    </div>

                    <div class="final-warning">
                        ANDA HARUS JUJUR DENGAN DIRI ANDA SENDIRI
                    </div>

                    <!-- BUTTON -->
                    <a href="{{ url('/english/2') }}" class="btn-start">
                        🚀 Kerjakan Sekarang
                    </a>

                </div>

            </div>
        </div>

    </div>

</div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var stslogin = "{{ session()->get('stslogin') }}";

            if (stslogin == 1) {
                swal(
                    'Selamat Datang Dalam Tes Online',
                    'Good Job',
                    'success'
                );
            }

        });
    </script>

@endsection
