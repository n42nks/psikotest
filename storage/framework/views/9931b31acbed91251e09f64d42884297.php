<?php $__env->startSection('pendaftar', 'active'); ?>
<?php $__env->startSection('css'); ?>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="box" style="border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.08);padding-bottom:20px;">

            <!-- HEADER -->
            <div style="text-align:center; padding:20px;">
                <img src="<?php echo e(asset('img/logo_atc.png')); ?>" height="80">
                <h4 style="margin:5px 0;">Laporan Sistem CAT seleksi perangkat desa</h4>
                
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
                            <td><?php echo e($npm); ?></td>
                            <td><?php echo e($nama); ?></td>
                            <td><?php echo e($alamat); ?></td>
                            <td><?php echo e($telp); ?></td>
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

                        <?php
                            $total_benar = 0;
                            $total_salah = 0;
                            $total_soal = 0;
                            $adaGagal = false;
                        ?>

                        <?php $__currentLoopData = $hasilPerKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
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
                            ?>

                            <tr style="<?php echo e(!$lulus ? 'background:#ffe5e5;' : ''); ?>">
                                <td><?php echo e($hasil->kategori); ?></td>
                                <td><?php echo e($hasil->jumlah); ?></td>
                                <td style="color:green; font-weight:bold;"><?php echo e($hasil->benar); ?></td>
                                <td style="color:red; font-weight:bold;"><?php echo e($hasil->salah); ?></td>
                                <td>
                                    <b><?php echo e($nilai); ?>

                                </b>( <small><?php echo e(round(($hasil->benar / $hasil->jumlah) * 100)); ?>%</small> )
                                </td>
                                <td>
                                    <?php if($lulus): ?>
                                        <span style="color:green; font-weight:bold;">✅ LULUS</span>
                                    <?php else: ?>
                                        <span style="color:red; font-weight:bold;">❌ TIDAK LULUS</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>

                

                <!-- SUMMARY -->
                

                <?php if($total_soal === 0): ?>
                    <p style="text-align:center; color:red; margin-top:20px;">
                        ⚠ Belum mengerjakan ujian
                    </p>
                <?php endif; ?>

            </div>
            <div style="text-align:center; margin-top:25px;margin-bottom:25px;">
                <a href="<?php echo e(url('/pilihsoal')); ?>"
                    style="display:inline-block;padding:10px 25px;background:#243A6B;color:white;border-radius:10px;text-decoration:none;font-weight:bold;transition:0.3s;       "
                    onmouseover="this.style.background='#1e2f57'" onmouseout="this.style.background='#243A6B'">
                    ← Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/frontend/data_hasil.blade.php ENDPATH**/ ?>