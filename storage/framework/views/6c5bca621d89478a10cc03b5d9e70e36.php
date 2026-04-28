
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/sound','active'); ?>
<?php $__env->startSection('eng/soal/display',''); ?>
<?php $__env->startSection('datasoaleng','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Petunjuk</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('admin/sound/eng/save')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php if($data->id != null): ?>
          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
          <div class="form-group">
            <audio style="width: 100%" controls src="data:audio/ogg;base64,<?php echo e($data->sound); ?>" >
          </div>
        <?php endif; ?>
        <br>
        <div class="form-group">
          <label for="exampleInputFile">Pilih File Audio</label>
          <input type="file" accept=".mp3,audio/*" id="sound" name="sound">

          <p class="help-block">Pilih file audio yang ingin di simpan</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_sound_eng_add.blade.php ENDPATH**/ ?>