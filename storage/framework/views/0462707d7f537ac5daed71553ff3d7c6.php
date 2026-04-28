
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/soal','active'); ?>
<?php $__env->startSection('eng/soal/display',''); ?>
<?php $__env->startSection('datasoaleng','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Soal Reading</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('admin/listening/eng/save')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <?php if($data->id_soal != null): ?>
          <input type="hidden" name="id" value="<?php echo e($data->id_soal); ?>">
        <?php endif; ?>
        <br>
        <div class="form-group">
          <label>Soal</label>
          <textarea class="form-control" rows="2" name="soal" id="soal" placeholder="Masukan Soal"><?php echo e($data->soal); ?></textarea>
        </div>
        <br>
        <div class="form-group">
          <label>Suara</label>
          <select name="id_sound" id="id_sound" class="form-control">
            <?php $__currentLoopData = $sounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sound): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($data->id_sound == $sound->id ? 'selected' : ''); ?> value="<?php echo e($sound->id); ?>"><?php echo e($sound->id); ?>.</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        <div>
        <br>
        <div class="form-group">
          <label>Petunjuk</label>
          <select name="id_petunjuk" name="id_petunjuk" class="form-control">
            <?php $__currentLoopData = $petunjuks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petunjuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($data->id_petunjuk == $petunjuk->id ? 'selected' : ''); ?> value="<?php echo e($petunjuk->id); ?>"><?php echo e($petunjuk->id); ?>. <?php echo e($petunjuk->petunjuk); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        <div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban A :</label>
          <input value="<?php echo e($data->opsiA); ?>" type="text" class="form-control" placeholder="Masukkan Jawaban A" id="a" name="a">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban B :</label>
          <input value="<?php echo e($data->opsiB); ?>" type="text" class="form-control" placeholder="Masukkan Jawaban B" id="b" name="b">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban C :</label>
          <input value="<?php echo e($data->opsiC); ?>" type="text" class="form-control" placeholder="Masukkan Jawaban C" id="c" name="c">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Jawaban D :</label>
          <input value="<?php echo e($data->opsiD); ?>" type="text" class="form-control" placeholder="Masukkan Jawaban D" id="d" name="d">
        </div>
        <br>
        <div class="form-group">
          <label for="text">Kunci Jawaban :</label>
          <input value="<?php echo e($data->key); ?>" type="text" class="form-control" placeholder="Masukkan Kunci Jawaban" id="key" name="key">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_listening_eng_add.blade.php ENDPATH**/ ?>