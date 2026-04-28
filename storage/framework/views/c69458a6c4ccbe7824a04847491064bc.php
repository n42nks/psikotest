
<?php $__env->startSection('datasoal','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Edit Data Soal</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('/admin/soal/'.$tbsoal->Idsoal.'/update')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="col">
        <input type="hidden" id="Idsoal" name="Idsoal" value="<?php echo e($tbsoal->Idsoal); ?>">
        <label for="text">Jawaban A :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban A" id="k_D" name="k_D" value="<?php echo e($tbsoal->k_D); ?>">
        </div>
        <br>
        <div>
        <label for="text">Jawaban B :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban B" id="k_I" name="k_I" value="<?php echo e($tbsoal->k_I); ?>">
        </div>
        <br>
        <div>
        <label for="text">Jawaban C :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban C" id="k_S" name="k_S" value="<?php echo e($tbsoal->k_S); ?>">
        </div>
        <br>
        <div>
        <label for="text">Jawaban D :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jawaban D" id="k_C" name="k_C" value="<?php echo e($tbsoal->k_C); ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_soaledit.blade.php ENDPATH**/ ?>