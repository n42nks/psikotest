@extends('frontend/dashboard')
@section('pendaftar', 'active')

@section('css')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
            /* ❌ hilangkan scroll */
        }

        /* Override bawaan template */
        .content-wrapper,
        .content,
        .container {
            height: 100%;
        }

        .card-modern {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .card-header-modern {
            background: linear-gradient(135deg, #243A6B, #1e2f57);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .card-body-modern {
            padding: 30px;
        }

        /* INFO */
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            font-size: 15px;
        }

        .info-item span {
            color: #64748b;
        }

        .info-item strong {
            color: #111827;
        }

        /* BUTTON */
        .btn-start {
            padding: 12px 30px;
            background: linear-gradient(90deg, #22c55e, #16a34a);
            color: white;
            border-radius: 12px;
            border: none;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s;
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.3);
        }

        .btn-start:hover {
            transform: translateY(-2px);
        }
    </style>
@endsection
@section('content')

    <div class="center-page">

        <div class="card-modern">

            <!-- HEADER -->
            <div class="card-header-modern">
                <h3>📊 Data Peserta Tes</h3>
            </div>

            <!-- BODY -->
            <div class="card-body-modern">

                <div class="info-item">
                    <span>Nomor Peserta</span>
                    <strong>{{ session()->get('npm') }}</strong>
                </div>

                <div class="info-item">
                    <span>Nama Peserta</span>
                    <strong>{{ session()->get('nama') }}</strong>
                </div>

                <div class="info-item">
                    <span>Jenis Test</span>
                    <strong>Tes Wawasan Kebangsaan</strong>
                </div>

                <div class="info-item">
                    <span>Tanggal</span>
                    <strong>{{ date('d M Y') }}</strong>
                </div>

                <div class="info-item">
                    <span>Kesempatan</span>
                    <strong>1 Kali</strong>
                </div>

                <!-- BUTTON -->
                <div class="text-center" style="margin-top:25px;">
                    <button class="btn-start" data-toggle="modal" data-target="#modal-info">
                        🚀 Mulai Tes
                    </button>
                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="modal-info">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius:15px; overflow:hidden;">

                <!-- HEADER -->
                <div style="background:linear-gradient(135deg,#243A6B,#1e2f57); color:white; padding:20px;">
                    <h4 style="margin:0;">📢 Peraturan Tes</h4>
                </div>

                <!-- BODY -->
                <div class="modal-body" style="padding:25px;">

                    <ul style="line-height:1.8; color:#374151; padding-left:18px;">
                        <li>Kesempatan hanya <b>1 kali</b></li>
                        <li>Jumlah soal: <b>10</b></li>
                        <li>Durasi: <b>2 menit</b></li>
                        <li>Jangan menutup halaman selama tes</li>
                        <li>Pastikan semua soal terjawab</li>
                    </ul>

                    <div style="margin-top:15px; color:#16a34a; font-weight:bold;">
                        ✅ Selamat mengerjakan!
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer" style="border:none; display:flex; gap:10px;">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Batal
                    </button>

                    <a href="{{ url('/tpa/1') }}" class="btn btn-success" style="flex:1;">
                        🚀 Mulai Tes
                    </a>

                </div>

            </div>
        </div>
    </div>
@endsection
