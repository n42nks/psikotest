<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        div {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
        }
        @page {
            size: auto;
            margin-bottom: 1px;
            margin-top: 1px;
        }
    </style>
</head>
<body>
    <div id="header" style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
        <img src="{{ asset('img/logo.png') }}" style="height: 60px; margin-right: 15px;" id="img-logo">
        <h2 style="margin: 0;">Inlastek Welding Institut</h2>
    </div>


    <br><br>
    <center><h2>Hasil Test Online</h2></center>

    <table style="width: 100%;">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>{{ $npm }}</td>
            <td>{{ $nama }}</td>
            <td>{{ $kota }}</td>
            <td>{{ $alamat }}</td>
        </tr>
    </table>

    <br>
    <center><h2>Hasil Per Kategori</h2></center>
    <table style="width: 100%;">
        <tr>
            <th>Kategori</th>
            <th>Jumlah Soal</th>
            <th>Benar</th>
            <th>Salah</th>
            <th>Nilai</th>
        </tr>
        @php
            $total_benar = 0;
            $total_salah = 0;
            $total_soal = 0;
        @endphp

        @foreach($hasilPerKategori as $hasil)
        @php
            $total_benar += $hasil->hasil;
            $total_salah += $hasil->salah;
            $total_soal += $hasil->jumlah;
        @endphp
        <tr>
            <td>{{ $hasil->kategori }}</td>
            <td>{{ $hasil->jumlah }}</td>
            <td>{{ $hasil->hasil }}</td>
            <td>{{ $hasil->salah }}</td>
            <td>{{ $hasil->hasil }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <center><h2>Rekapitulasi Total</h2></center>
    <table style="width: 100%;">
        <tr>
            <th>Total Soal</th>
            <th>Total Benar</th>
            <th>Total Salah</th>
            <th>Total Nilai</th>
        </tr>
        <tr>
            <td>{{ $total_soal }}</td>
            <td>{{ $total_benar }}</td>
            <td>{{ $total_salah }}</td>
            <td>{{ $total_benar }}</td>
        </tr>
    </table>

    @if ($total_soal === 0)
        <p style="text-align:center; color:red;">Belum Melakukan Ujian</p>
    @endif

    <br><br><br>
    <div style="width: 100%; text-align: right; padding-right: 50px;">
        {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
        <br><br><br><br>
        <strong>Panitia Seleksi</strong>
        <br><br><br>
        <u>(...................................)</u>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
