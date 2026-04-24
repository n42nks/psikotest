@extends('frontend/dashboard')
@section('pendaftar', 'active')
@section('css')
    <style>
        /* FULL SCREEN CENTER */
        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
            /* 🔥 hilangkan scroll */
        }

        .finish-wrapper {
            position: fixed;
            /* 🔥 kunci layar */
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(135deg, #eef2ff, #f8fafc);
        }

        /* CARD */
        .finish-card {
            background: white;
            border-radius: 20px;
            padding: 50px 40px;
            width: 420px;
            max-width: 90%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.6s ease;
            max-height: 90vh;
            overflow: hidden;
            /* jaga-jaga kalau kecil layar */
        }

        /* ICON BULAT */
        .icon-success {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px auto;
            color: white;
            font-size: 35px;
            box-shadow: 0 8px 20px rgba(34, 197, 94, 0.3);
        }

        /* TITLE */
        .title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* DESC */
        .desc {
            color: #64748b;
            margin-bottom: 20px;
            font-size: 14px;
        }

        /* IMAGE */
        .img-finish {
            width: 160px;
            margin: 20px 0;
        }

        /* BUTTON */
        .btn-next {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(90deg, #F97316, #FB923C);
            color: white;
            border-radius: 12px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(249, 115, 22, 0.3);
        }

        .btn-next:hover {
            transform: translateY(-2px);
            opacity: 0.95;
        }

        /* ANIMASI */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection

@section('content')
    <div class="finish-wrapper">

        <div class="finish-card text-center">

            <!-- ICON -->
            <div class="icon-success">
                <i class="fa fa-check"></i>
            </div>

            <!-- TITLE -->
            <h2 class="title">Tes Selesai 🎉</h2>

            <!-- DESC -->
            <p class="desc">
                Selamat! Anda telah menyelesaikan tes dengan baik.<br>
                Silakan lanjut ke tahap berikutnya.
            </p>

            <!-- IMAGE -->
            <img src="{{ asset('img/jempol.png') }}" class="img-finish">

            <!-- BUTTON -->
            <a href="{{ url('/pilihsoal') }}" class="btn-next">
                <i class="fa fa-arrow-right"></i> Lanjut Pilih Soal
            </a>

        </div>

    </div>
@endsection
