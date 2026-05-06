<?php $__env->startSection('pendaftar','active'); ?>
<?php $__env->startSection('header'); ?>
<h1>List Data Peserta</h1>
<?php if(session('role') == '1'): ?>
    <a class="btn btn-primary" href="<?php echo e(url('/admin/pendaftar/tambah')); ?>">Tambah Data</a>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                  <th width="10%" style="text-align: center;">Nomer Daftar</th>
                  <th width="25%" style="text-align: center;">Nama</th>
                  <th width="10%" style="text-align: center;">Tanggal Lahir</th>
                  <th width="15%" style="text-align: center;">Tempat Lahir</th>
                  <th width="5%" style="text-align: center;">Telepon</th>
                  <th width="5%" style="text-align: center;">Password</th>
                  <?php if(session('role') == '1'): ?>
                    <th width="5%" style="text-align: center;">Opsi</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $tbpendaftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($pendaftar->NPM); ?></td>
                  <td><?php echo e($pendaftar->Nama); ?></td>
                  <td><?php echo e($pendaftar->Tgl_lahir); ?></td>
                  <td><?php echo e($pendaftar->Tmp_lahir); ?></td>
                  <td><?php echo e($pendaftar->Telp); ?></td>
                  <td><?php echo e($pendaftar->Password); ?></td>
                  <?php if(session('role') == '1'): ?>
                    <td style="text-align:center;">
                        <a href="#" onclick="hapuspendaftar('<?php echo e(url('/admin/pendaftar/hapus-'.$pendaftar->NPM)); ?>')" type="button" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  <?php endif; ?>
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

    <div class="modal" id="modalDelete">
    <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        Anda Yakin ?
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
        <a class="btn btn-danger" href="" id="btnYa">YA</a>
    </div>

    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>
// $(document).ready(function(){

// })
function hapuspendaftar(npm){
    $('#btnYa').attr("href", npm);
    $('#modalDelete').modal();
}
// function random(){
//   var disc =["D","I","S","C"];
//   var acak = disc.sort(()=>Math.random() - 0.5);
//   $(".testing").html(acak);

// }
</script>
<script>
var sukses = 1;
    if(sukses = <?php echo e(Session::get('status')); ?>){
        md.notif("top","right", "Berhasil ...", "info");
    }else{
        md.notif("top","right", "Gagal ...", "danger");
    }
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/backend/daftar/data_pendaftar.blade.php ENDPATH**/ ?>