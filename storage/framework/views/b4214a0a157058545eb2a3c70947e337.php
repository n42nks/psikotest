
<?php $__env->startSection('datasoal','active'); ?>
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Data Soal DISC</h1>
<br>
<a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="soal/show">Tambah Data</a>

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
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">I</th>
                  <th width="20%" style="text-align: center;">S</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $tbsoal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($soal->k_D); ?></td>
                  <td><?php echo e($soal->k_I); ?></td>
                  <td><?php echo e($soal->k_S); ?></td>
                  <td><?php echo e($soal->k_C); ?></td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="soal/<?php echo e($soal->Idsoal); ?>/edit">Edit</a>
                    <a data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm">Hapus</a>
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
                          <h4 class="modal-title">Konfirmasi Hapus Data Soal</h4>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="soal/delete" method="POST">
                            <div class="col">
                              <label for="text">Apakah ingin menghapus soal</label>
                            </div>
                            <div class="modal-footer">
                              <a href="soal/<?php echo e($soal->Idsoal); ?>/delete" type="button" class="btn btn-danger btn-sm">Hapus</a>
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

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_soal.blade.php ENDPATH**/ ?>