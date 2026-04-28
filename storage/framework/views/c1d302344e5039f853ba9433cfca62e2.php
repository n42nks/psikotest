
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/cerita','active'); ?>
<?php $__env->startSection('eng/soal/display',''); ?>
<?php $__env->startSection('datasoaleng','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Cerita</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form id="form" action="<?php echo e(url('admin/cerita/eng/save')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <?php if($data->id != null): ?>
          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
        <?php endif; ?>
        <br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Cerita
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
              <textarea class="textarea" placeholder="Place some text here" name="cerita" id="cerita"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($data->cerita); ?></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_cerita_eng_add.blade.php ENDPATH**/ ?>