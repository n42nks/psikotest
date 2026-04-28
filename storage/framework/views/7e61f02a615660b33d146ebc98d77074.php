
<?php $__env->startSection('waktu','active'); ?>
<?php $__env->startSection('header'); ?>
<h1>Setting Waktu</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('swal/sweetalert2.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


  <div class="row">
    <div class="col-md-8">
      <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" method="post" action="<?php echo e(url('/setwaktu')); ?>">
            <?php echo method_field('post'); ?>
            <?php echo csrf_field(); ?>
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>

                <div class="col-sm-8">
                  <input type="date" class="form-control" id="inputEmail3" placeholder="Email" name="tanggal">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">waktu</label>

                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Seting Waktu Satuan Menit" name="waktu">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Kategori Soal</label>

                <div class="col-sm-8">
                <select class="form-control" name="kategori">
                  <option value="">Pilih Salah Satu Soal</option>
                  <?php $__currentLoopData = $kat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($dtkat->kategori); ?>"><?php echo e($dtkat->kategori); ?></option>                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" style="text-align:center;">
              <button type="submit" class="btn btn-info pull-center">Setting</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>

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
              <th>No.</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php $__currentLoopData = $waktu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($key->tanggal); ?></td>
                  <td><?php echo e($key->waktu); ?> Menit</td>
                  <td><?php echo e($key->kategori); ?></td>
                 <td>
                   <button type="button" class="btn btn-primary" data-id="<?php echo e($key->Id); ?>" data-tanggal="<?php echo e($key->tanggal); ?>" data-waktu="<?php echo e($key->waktu); ?>" data-kategori="<?php echo e($key->kategori); ?>" data-toggle="modal" data-target="#modal-default">
                     Edit
                   </button>
                   <button type="button" class="btn btn-danger" data-id="<?php echo e($key->Id); ?>" data-tanggal="<?php echo e($key->tanggal); ?>" data-waktu="<?php echo e($key->waktu); ?>" data-kategori="<?php echo e($key->kategori); ?>" data-toggle="modal" data-target="#modal-delete">
                     Hapus
                   </button>
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


          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Setting</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="post" id="formku" action="">
                    <?php echo method_field('post'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-body">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>

                        <div class="col-sm-8">
                          <input type="date" class="form-control" id="tanggal" placeholder="Email" name="tanggal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">waktu</label>

                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="waktu" placeholder="Seting Waktu Satuan Menit" name="waktu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Kategori Soal</label>

                        <div class="col-sm-8">
                        <select class="form-control" name="kategori" id="kategori">
                          <option value="">Pilih Salah Satu Soal</option>
                          <?php $__currentLoopData = $kat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($dtkat->kategori); ?>"><?php echo e($dtkat->kategori); ?></option>                  
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                      </div>
                    </div>

                </div>
                <div class="modal-footer" style="text-align:center">

                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
                  </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
  <script type="text/javascript" src="<?php echo e(asset('swal/sweetalert2.js')); ?>"></script>
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
      $('#modal-default').on('show.bs.modal',function(event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        var tanggal = button.data("tanggal");
        var waktu = button.data("waktu");
        var kategori = button.data("kategori");

        var modal = $(this);
        modal.find('.modal-body #tanggal').val(tanggal);
        modal.find('.modal-body #waktu').val(waktu);
        modal.find('.modal-body #kategori').val(kategori);

        $('#formku').attr('action', "<?php echo e(url('/updatewaktu')); ?>" + "/"+ id);
      });
      $('#modal-delete').on('show.bs.modal',function(event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        var tanggal = button.data("tanggal");
        var waktu = button.data("waktu");
        var kategori = button.data("kategori");

        var modal = $(this);

        $('#delform').attr('action', "<?php echo e(url('/deletewaktu')); ?>" + "/"+ id);
      });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\admin\waktu.blade.php ENDPATH**/ ?>