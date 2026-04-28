
<?php $__env->startSection('datasoal','active'); ?>
<?php $__env->startSection('header'); ?>
<h1>Tambah Data Soal</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-8">
      <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="<?php echo e(url('admin/soal/save')); ?>" method="POST" class="form-horizontal">
              <?php echo e(csrf_field()); ?>

              <div class="col">
                <label for="text">Jawaban A :</label>
                <input type="text" class="form-control" placeholder="Masukkan Jawaban A" id="k_D" name="k_D">
              </div>
              <br>
              <div>
                <label for="text">Jawaban B :</label>
                <input type="text" class="form-control" placeholder="Masukkan Jawaban B" id="k_D" name="k_I">
              </div>
              <br>
              <div>
                <label for="text">Jawaban C :</label>
                <input type="text" class="form-control" placeholder="Masukkan Jawaban C" id="k_D" name="k_S">
              </div>
              <br>
              <div>
                <label for="text">Jawaban D :</label>
                <input type="text" class="form-control" placeholder="Masukkan Jawaban D" id="k_D" name="k_C">
              </div>
              <div class="modal-footer" style="text-align:center">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
                <div class="col-md-3">

                </div>

              </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_soaladd.blade.php ENDPATH**/ ?>