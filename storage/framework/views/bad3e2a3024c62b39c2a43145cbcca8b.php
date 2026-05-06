  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('tpa','active'); ?>
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('header'); ?>
<h1>Input Data Soal</h1>
<br>
<a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="soal-tpa/show">Tambah Data</a>

<?php $__env->stopSection(); ?>
    <!-- Content Header (Page header) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID Soal</th>
                <th>Soal</th>
                <th>Kategori</th>
                <th>Jawaban</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td style="width:5%"><?php echo e($data->id_soal); ?></td>
                  <td style="width:50%"><?php echo $data->soal; ?></td>
                  <td style="width:20%"><?php echo $data->kategori; ?></td>
                  <td style="width:10%"><?php echo e($data->jawaban); ?></td>
                  <td>
                    <a href="soal-tpa/<?php echo e($data->id_soal); ?>/edit" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger" data-id="<?php echo e($data->id_soal); ?>"  data-toggle="modal" data-target="#modal-delete">
                      Hapus
                    </a>
                  </td>

              </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>

    <div class="modal fade" id="modal-delete" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Setting</h4>
          </div>
          <div class="modal-body">
             Apakah Anda Ingin Menghapusnya ?
          </div>
          <div class="modal-footer">
            <form class="" id="delform" action="" method="post" >
              <?php echo method_field('post'); ?>
              <?php echo csrf_field(); ?>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Ya</button>

          </form>
          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    </form>


  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>
    <script type="text/javascript">
      $(document).ready(function(){

        var stslogin = "<?php echo e(session()->get('stslogin')); ?>";

        if (stslogin == 1) {
          Swal.fire(

          'Konfirmasi',
          'Simpan Berhasil',
          'success'
            )
        }

      });
    </script>
    <script type="text/javascript">

    $('#modal-delete').on('show.bs.modal',function(event) {
      var button = $(event.relatedTarget);
      var id = button.data("id");
      var tanggal = button.data("tanggal");
      var waktu = button.data("waktu");
      var kategori = button.data("kategori");

      var modal = $(this);

      $('#delform').attr('action', "<?php echo e(url('/admin/soal-tpa/delete')); ?>" + "/"+ id);
    });
    </script>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/backend/DataSoalTpa/DaftarSoal.blade.php ENDPATH**/ ?>