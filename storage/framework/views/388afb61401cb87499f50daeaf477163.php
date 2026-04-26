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
                        <td width="150">NPM</td>
                        <td><?php echo e($peserta->NPM); ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo e($peserta->Nama); ?></td>
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
                    </tr>

                    <?php $__currentLoopData = $hasilPerKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $nilaiKategori = $h->jumlah > 0 ? round(($h->benar / $h->jumlah) * 100, 2) : 0;
                        ?>
                        <tr>
                            <td><?php echo e($h->kategori); ?></td>
                            <td><?php echo e($h->jumlah); ?></td>
                            <td style="color:green; font-weight:bold;"><?php echo e($h->benar); ?></td>
                            <td style="color:red; font-weight:bold;"><?php echo e($h->salah); ?></td>
                            <td><b><?php echo e($nilaiKategori); ?></b></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

            <div class="box-body">

                <div style="display:flex; gap:15px; justify-content:space-between; flex-wrap:wrap;">

                    <div
                        style="flex:1; background:#3b82f6; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Total Soal<br>
                        <h3><?php echo e($totalSoal); ?></h3>
                    </div>

                    <div
                        style="flex:1; background:#22c55e; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Benar<br>
                        <h3><?php echo e($totalBenar); ?></h3>
                    </div>

                    <div
                        style="flex:1; background:#ef4444; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Salah<br>
                        <h3><?php echo e($totalSalah); ?></h3>
                    </div>

                    <div
                        style="flex:1; background:#f97316; color:white; padding:15px; border-radius:10px; text-align:center;">
                        Nilai<br>
                        <h3><?php echo e($nilai); ?></h3>
                    </div>

                </div>

                <div style="margin-top:20px;">
                    <?php if($nilai >= 70): ?>
                        <div class="alert alert-success text-center" style="font-size:16px; font-weight:bold;">
                            ✅ LULUS
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger text-center" style="font-size:16px; font-weight:bold;">
                            ❌ TIDAK LULUS
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\psikotest\resources\views/backend/partials/hasil_npm.blade.php ENDPATH**/ ?>