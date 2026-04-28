
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/petunjuk','active'); ?>
<?php $__env->startSection('eng/soal/display',''); ?>
<?php $__env->startSection('datasoaleng','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Petunjuk</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('admin/petunjuk/eng/save')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <?php if($data->id != null): ?>
          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
        <?php endif; ?>
        <br>
        <div class="form-group">
          <label>Petunjuk</label>
          <textarea class="form-control" rows="5" name="petunjuk" id="petunjuk" placeholder="Masukan Data Petunjuk"><?php echo e($data->petunjuk); ?></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_petunjuk_eng_add.blade.php ENDPATH**/ ?>