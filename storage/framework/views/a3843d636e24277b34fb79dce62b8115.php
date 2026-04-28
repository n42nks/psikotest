<div class="box">
    <div class="box-header">
        <b>Data Hasil Seluruh Peserta</b>
    </div>

    <div class="box-body">

        <table class="table table-bordered table-striped text-center">
            <thead style="background:#243A6B; color:white;">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Soal</th>
                    <th>Benar</th>
                    <th>Salah</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td><?php echo e($d['npm']); ?></td>
                    <td><?php echo e($d['nama']); ?></td>
                    <td><?php echo e($d['total']); ?></td>
                    <td style="color:green; font-weight:bold;"><?php echo e($d['benar']); ?></td>
                    <td style="color:red; font-weight:bold;"><?php echo e($d['salah']); ?></td>
                    <td><b><?php echo e($d['nilai']); ?></b></td>
                    <td>
                        <?php if($d['nilai'] >= 70): ?>
                            <span class="label label-success">LULUS</span>
                        <?php else: ?>
                            <span class="label label-danger">TIDAK</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

    </div>
</div>
<?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\partials\hasil_semua.blade.php ENDPATH**/ ?>