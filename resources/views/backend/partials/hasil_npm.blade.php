<div class="row">

    <!-- DATA PESERTA -->
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <b>Data Peserta</b>
            </div>
            <div class="box-body">
                <table class="table">
                    <tr>
                        <td width="150">Nomer Peserta</td>
                        <td>{{ $peserta->NPM }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{ $peserta->Nama }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- HASIL PER KATEGORI -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <b>Hasil Per Kategori</b>
            </div>

            <div class="box-body">
                <table class="table table-bordered text-center">
                    <tr style="background:#243A6B; color:white;">
                        <th>Kategori</th>
                        <th>Soal</th>
                        <th>Benar</th>
                        <th>Salah</th>
                        <th>Nilai</th>
                        <th>Status</th>
                    </tr>
                    @php
                        $adaGagal = false;
                    @endphp
                    @foreach ($hasilPerKategori as $h)
                        @php
                            $nilaiKategori = $h->benar * 2;

                            $kategoriKhusus = [1, 3];
                            $min = in_array($h->id_kategori, $kategoriKhusus) ? 60 : 50;

                            $lulus = $nilaiKategori >= $min;

                            if (!$lulus) {
                                $adaGagal = true;
                            }
                        @endphp

                        <tr style="{{ !$lulus ? 'background:#ffe5e5;' : '' }}">
                            <td style="text-align: left;">{{ $h->kategori }}</td>
                            <td>{{ $h->jumlah }}</td>
                            <td style="color:green; font-weight:bold;">{{ $h->benar }}</td>
                            <td style="color:red; font-weight:bold;">{{ $h->salah }}</td>
                            <td><b>{{ $nilaiKategori }}
                                </b>(
                                <small>{{ round(($h->benar / $h->jumlah) * 100) }}%</small> )
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
        </div>
    </div>

    <!-- 🔥 REKAP TOTAL -->
    <div class="col-md-12">
        <div class="box box-success">

            <div class="box-header">
                <b>Rekapitulasi Nilai</b>
            </div>
            @php
                $totalNilai = 0;

                foreach ($hasilPerKategori as $h) {
                    $totalNilai += $h->benar * 2;
                }

                $total_nilai = count($hasilPerKategori) > 0 ? round($totalNilai / count($hasilPerKategori)) : 0;

                // 🔥 STATUS AKHIR
                $lulusAkhir = $total_nilai >= 60 && !$adaGagal;
            @endphp
            <div class="box-body">

                <div style="display:flex; gap:15px; justify-content:space-between; flex-wrap:wrap;">

                    <div
                        style="flex:1; background:#3b82f6; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Total Soal<br>
                        <h3>{{ $totalSoal }}</h3>
                    </div>

                    <div
                        style="flex:1; background:#22c55e; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Benar<br>
                        <h3>{{ $totalBenar }}</h3>
                    </div>

                    <div
                        style="flex:1; background:#ef4444; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Salah<br>
                        <h3>{{ $totalSalah }}</h3>
                    </div>

                    <div
                        style="flex:1; background:#f97316; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Nilai Rata-Rata<br>
                        <h3>{{ $total_nilai }}</h3>
                    </div>

                </div>

                <div style="margin-top:20px;">
                    @if ($adaGagal)
                        <div class="alert alert-warning text-center" style="margin-top:15px;">
                            ⚠ Ada kategori yang tidak memenuhi nilai minimum
                        </div>
                    @endif

                    <div style="margin-top:15px;">
                        @if ($lulusAkhir)
                            <div class="alert alert-success text-center">
                                ✅ LULUS
                            </div>
                        @else
                            <div class="alert alert-danger text-center">
                                ❌ TIDAK LULUS
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
