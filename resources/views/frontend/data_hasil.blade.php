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

        #tabelku th:first-child,
        #tabelku td:first-child {
            width: 45%;
            text-align: left;
        }

        #tabelku th:not(:first-child),
        #tabelku td:not(:first-child) {
            text-align: center;
        }

        #tabelku td {
            white-space: normal;
            word-break: break-word;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="box" style="border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.08);padding-bottom:20px;">

            <!-- HEADER -->
            <div style="text-align:center; padding:20px;">
                <img src="{{ asset('img/logo_atc.png') }}" height="80">
                <h4 style="margin:5px 0;">Laporan Sistem CAT seleksi perangkat desa</h4>
                {{-- <small>Laporan Sistem CAT seleksi perangkat desa</small> --}}
            </div>

            <div style="background:#243A6B; color:white; padding:10px; text-align:center;">
                <b>HASIL TES CAT</b>
            </div>

            <div style="padding:10px;">

                <!-- DATA PESERTA -->
                <div class="box" style="padding:15px; border-radius:10px;">
                    <table class="table">
                        <tr>
                            <th>Nomer Peserta</th>
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
                <!-- HASIL -->
                <div class="box" style="padding:15px; border-radius:10px;">
                    <h4><b>Hasil Per Kategori</b></h4>

                    <table class="table" id="tabelku">
                        <tr style="background:#243A6B; color:white;">
                            <th>Kategori</th>
                            <th>Soal</th>
                            <th>Benar</th>
                            <th>Salah</th>
                            <th>Nilai</th>
                            <th>Status</th>
                        </tr>

                        @php
                            $total_benar = 0;
                            $total_salah = 0;
                            $total_soal = 0;
                            $adaGagal = false;
                        @endphp

                        @foreach ($hasilPerKategori as $hasil)
                            @php
                                // 🔥 TOTAL
                                $total_benar += $hasil->benar;
                                $total_salah += $hasil->salah;
                                $total_soal += $hasil->jumlah;

                                // 🔥 HITUNG NILAI DULU
                                $nilai = $hasil->benar * 2;

                                // 🔥 ATUR MINIMAL
                                $kategoriKhusus = [1, 3];
                                $min = in_array($hasil->id_kategori, $kategoriKhusus) ? 60 : 50;

                                // 🔥 STATUS
                                $lulus = $nilai >= $min;

                                if (!$lulus) {
                                    $adaGagal = true;
                                }
                            @endphp

                            <tr style="{{ !$lulus ? 'background:#ffe5e5;' : '' }}">
                                <td>{{ $hasil->kategori }}</td>
                                <td>{{ $hasil->jumlah }}</td>
                                <td style="color:green; font-weight:bold;">{{ $hasil->benar }}</td>
                                <td style="color:red; font-weight:bold;">{{ $hasil->salah }}</td>
                                <td>
                                    <b>{{ $nilai }}
                                </b>( <small>{{ round(($hasil->benar / $hasil->jumlah) * 100) }}%</small> )
                                </td>
                                <td>
                                    @if ($lulus)
                                        <span style="color:green; font-weight:bold;">✅ LULUS</span>
                                    @else
                                        <span style="color:red; font-weight:bold;">❌ TIDAK LULUS</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                {{-- @php
                    $totalNilai = 0;

                    foreach ($hasilPerKategori as $h) {
                        $totalNilai += $h->benar * 2;
                    }

                    $total_nilai = count($hasilPerKategori) > 0 ? round($totalNilai / count($hasilPerKategori)) : 0;

                    // 🔥 STATUS AKHIR
                    $lulusAkhir = $total_nilai >= 60 && !$adaGagal;
                @endphp

                @if ($lulusAkhir)
                    <div class="alert alert-success text-center" style="margin-top:20px;">
                        ✅ LULUS
                    </div>
                @else
                    <div class="alert alert-danger text-center" style="margin-top:20px;">
                        ❌ TIDAK LULUS
                    </div>
                @endif --}}

                <!-- SUMMARY -->
                {{-- <div style="display:flex; gap:15px; margin-top:20px; flex-wrap:wrap;">

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

                    <div
                        style="flex:1; background:#f97316; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Nilai Rata-Rata<br><b>{{ $total_nilai }}</b>
                    </div>

                </div> --}}

                @if ($total_soal === 0)
                    <p style="text-align:center; color:red; margin-top:20px;">
                        ⚠ Belum mengerjakan ujian
                    </p>
                @endif

            </div>
            <div style="text-align:center; margin-top:25px;margin-bottom:25px;">
                <a href="{{ url('/pilihsoal') }}"
                    style="display:inline-block;padding:10px 25px;background:#243A6B;color:white;border-radius:10px;text-decoration:none;font-weight:bold;transition:0.3s;       "
                    onmouseover="this.style.background='#1e2f57'" onmouseout="this.style.background='#243A6B'">
                    ← Kembali ke Pilih Soal
                </a>
            </div>

        </div>

    </div>

@endsection
