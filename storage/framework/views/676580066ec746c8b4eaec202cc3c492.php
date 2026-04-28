<!DOCTYPE html>
<html>
<head>
    <title>Laporan Hasil Tes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 20px;
        }

        h2 {
            margin: 5px 0;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            height: 60px;
            margin-bottom: 10px;
        }

        .title {
            text-align: center;
            margin: 20px 0;
            font-size: 20px;
            font-weight: bold;
            color: #243A6B;
        }

        /* CARD */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background: #243A6B;
            color: white;
            padding: 10px;
            font-size: 13px;
        }

        td {
            padding: 10px;
            text-align: center;
            font-size: 13px;
            border-bottom: 1px solid #eee;
        }

        tr:nth-child(even) {
            background: #f9fafc;
        }

        /* SUMMARY BOX */
        .summary {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .summary-box {
            width: 23%;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .bg-blue { background: #3b82f6; }
        .bg-green { background: #22c55e; }
        .bg-red { background: #ef4444; }
        .bg-orange { background: #f97316; }

        /* FOOTER */
        .footer {
            margin-top: 50px;
            text-align: right;
        }

        @media print {
            body {
                margin: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <img src="<?php echo e(asset('img/logo.png')); ?>">
        <h2>Inlastek Welding Institut</h2>
        <div style="font-size:13px;">Laporan Hasil Ujian CAT</div>
    </div>

    <div class="title">HASIL TEST ONLINE</div>

    <!-- DATA PESERTA -->
    <div class="card">
        <table>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            <tr>
                <td><?php echo e($npm); ?></td>
                <td><?php echo e($nama); ?></td>
                <td><?php echo e($alamat); ?></td>
            </tr>
        </table>
    </div>

    <!-- HASIL PER KATEGORI -->
    <div class="card">
        <h3 style="margin-bottom:10px;">Hasil Per Kategori</h3>

        <table>
            <tr>
                <th>Kategori</th>
                <th>Soal</th>
                <th>Benar</th>
                <th>Salah</th>
                <th>Nilai</th>
            </tr>

            <?php
                $total_benar = 0;
                $total_salah = 0;
                $total_soal = 0;
            ?>

            <?php $__currentLoopData = $hasilPerKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $total_benar += $hasil->hasil;
                $total_salah += $hasil->salah;
                $total_soal += $hasil->jumlah;
            ?>
            <tr>
                <td><?php echo e($hasil->kategori); ?></td>
                <td><?php echo e($hasil->jumlah); ?></td>
                <td style="color:#22c55e; font-weight:bold;"><?php echo e($hasil->hasil); ?></td>
                <td style="color:#ef4444; font-weight:bold;"><?php echo e($hasil->salah); ?></td>
                <td><?php echo e($hasil->hasil); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <!-- REKAP -->
    <div class="card">
        <h3>Rekapitulasi</h3>

        <div class="summary">
            <div class="summary-box bg-blue">
                Total Soal<br><?php echo e($total_soal); ?>

            </div>

            <div class="summary-box bg-green">
                Benar<br><?php echo e($total_benar); ?>

            </div>

            <div class="summary-box bg-red">
                Salah<br><?php echo e($total_salah); ?>

            </div>

            <div class="summary-box bg-orange">
                Nilai<br><?php echo e($total_benar); ?>

            </div>
        </div>
    </div>

    <!-- STATUS -->
    <?php if($total_soal === 0): ?>
        <p style="text-align:center; color:red; font-weight:bold;">
            ⚠ Belum Melakukan Ujian
        </p>
    <?php endif; ?>

    <!-- FOOTER -->
    <div class="footer">
        <?php echo e(\Carbon\Carbon::now()->translatedFormat('d F Y')); ?>

        <br><br><br>

        <strong>Panitia Seleksi</strong>
        <br><br><br>

        <u>(...................................)</u>
    </div>

    <script>
        window.print();
    </script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasil\cetak_hasil.blade.php ENDPATH**/ ?>