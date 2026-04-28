
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/sound','active'); ?>
<?php $__env->startSection('eng/soal/display',''); ?>
<?php $__env->startSection('datasoaleng','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Input Data Soal Bhs Inggris</h1>
<br>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Suara</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="ex1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th width="5%" style="text-align: center;">ID</th>
                  <th width="75%" style="text-align: center;">Suara</th>
                  <th width="20%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $sounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sound): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <td><?php echo e($sound->id); ?></td>
                  <td>
                    <audio style="width: 100%" controls src="data:audio/ogg;base64,<?php echo e($sound->sound); ?>" >
                  </td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/show/<?php echo e($sound->id); ?>">Edit</a>
                    <a data-id="<?php echo e($sound->id); ?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
                  </td>
                </tr>
                <?php
                    $no++;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <!-- The Modal Hapus-->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        
                        <div class="modal-header">          
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title">Konfirmasi Hapus Data Suara</h4>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="soal/delete" method="POST">
                            <div class="col">
                              <label for="text">Apakah ingin menghapus suara</label>
                            </div>
                            <div class="modal-footer">
                              <a id="del" href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                            </form>       
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
      $('#ex1').DataTable()
      $(document).on("click", ".btn.btn-danger.btn-sm.del", function () {
        var id = $(this).data('id');
        $("#del").attr("href", 'eng/sound/' + id + '/delete')
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_sound_eng.blade.php ENDPATH**/ ?>