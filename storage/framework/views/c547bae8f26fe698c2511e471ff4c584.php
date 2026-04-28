
  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>

    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Anda yakin akan menghapus data ini?</h3>
            </div>
            <form action="<?php echo e(route('Soal.delete')); ?>" method="post" role="form">
                <div class="box-body">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id_soal" value="<?php echo e($Soal->id_soal); ?>">
                    <div class="form-group">
                        <label for="soal">Soal</label>
                        <input type="text" class="form-control" id="soal" name="soal" value="<?php echo $Soal->soal; ?>"disabled>
                    </div>
                </div>

                <div class="card-footer" align="right">
                  <a href="<?php echo e(route('Soal.index')); ?>" class="btn btn-sm btn-default">Tidak</a>
                  <input type="submit" class="btn btn-sm btn-danger" value="Ya, hapus data">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoalTpa\SoalConfirmDelete.blade.php ENDPATH**/ ?>