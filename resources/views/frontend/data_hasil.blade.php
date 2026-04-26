@extends('frontend/dashboard')
@section('pendaftar', 'active')
@section('css')

    <style>
        .card-modern {
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 25px;
            background: white;
            margin-bottom: 20px;
            animation: fadeUp 0.5s ease;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 90px;
            border-radius: 50%;
            border: 4px solid #F97316;
            margin-bottom: 10px;
        }

        .profile-header h3 {
            margin: 0;
            font-weight: bold;
            color: #243A6B;
        }

        .info-box-modern {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .info-box-modern:last-child {
            border-bottom: none;
        }

        .label-info {
            color: #777;
        }

        .value-info {
            font-weight: bold;
            color: #243A6B;
        }

        /* WRAPPER HASIL */
        .hasil-wrapper {
            margin-top: 20px;
            padding: 20px;
            border-radius: 16px;
            background: linear-gradient(135deg, #243A6B, #1e2f57);
            color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .hasil-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* LOADING */
        .loading-box {
            text-align: center;
            padding: 30px;
            color: #999;
        }

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

@section('content')
    <div class="container">

        <div class="box" style="border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">

            <!-- HEADER -->
            <div style="text-align:center; padding:20px;">
                <img src="{{ asset('img/logo_atc.png') }}" height="80">
                <h4 style="margin:5px 0;">Laporan Sistem CAT seleksi perangkat desa</h4>
                {{-- <small>Laporan Sistem CAT seleksi perangkat desa</small> --}}
            </div>

            <div style="background:#243A6B; color:white; padding:10px; text-align:center;">
                <b>HASIL TES CAT</b>
            </div>

            <div style="padding:20px;">

                <!-- DATA PESERTA -->
                <div class="box" style="padding:15px; border-radius:10px; margin-bottom:20px;">
                    <table class="table">
                        <tr>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                        </tr>
                        <tr>
                            <td>{{ $npm }}</td>
                            <td>{{ $nama }}</td>
                            <td>{{ $alamat }}</td>
                            <td>{{ $telp }}</td>
                        </tr>
                    </table>
                </div>

                <!-- HASIL -->
                <div class="box" style="padding:15px; border-radius:10px;">
                    <h4><b>Hasil Per Kategori</b></h4>

                    <table class="table">
                        <tr style="background:#243A6B; color:white;">
                            <th>Kategori</th>
                            <th>Soal</th>
                            <th>Benar</th>
                            <th>Salah</th>
                            <th>Nilai</th>
                        </tr>

                        @php
                            $total_benar = 0;
                            $total_salah = 0;
                            $total_soal = 0;
                        @endphp

                        @foreach ($hasilPerKategori as $hasil)
                            @php
                                $total_benar += $hasil->hasil;
                                $total_salah += $hasil->salah;
                                $total_soal += $hasil->jumlah;
                            @endphp
                            <tr>
                                <td>{{ $hasil->kategori }}</td>
                                <td tyle="white-space: normal; word-break: break-word;">{{ $hasil->jumlah }}</td>
                                <td style="color:green; font-weight:bold;">{{ $hasil->hasil }}</td>
                                <td style="color:red; font-weight:bold;">{{ $hasil->salah }}</td>
                                @php
                                    $nilai = $hasil->jumlah > 0 ? round(($hasil->hasil / $hasil->jumlah) * 100) : 0;
                                @endphp
                                <td>{{ $nilai }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <!-- SUMMARY -->
                <div style="display:flex; gap:15px; margin-top:20px; flex-wrap:wrap;">

                    <div
                        style="flex:1; background:#3b82f6; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Total Soal<br><b>{{ $total_soal }}</b>
                    </div>

                    <div
                        style="flex:1; background:#22c55e; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Benar<br><b>{{ $total_benar }}</b>
                    </div>

                    <div
                        style="flex:1; background:#ef4444; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Salah<br><b>{{ $total_salah }}</b>
                    </div>
                    @php
                        $total_nilai = $total_soal > 0 ? round(($total_benar / $total_soal) * 100) : 0;
                    @endphp

                    <div
                        style="flex:1; background:#f97316; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Nilai<br><b>{{ $total_nilai }}</b>
                    </div>

                </div>

                @if ($total_soal === 0)
                    <p style="text-align:center; color:red; margin-top:20px;">
                        ⚠ Belum mengerjakan ujian
                    </p>
                @endif

            </div>

        </div>

    </div>

@endsection
