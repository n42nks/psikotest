
<?php $__env->startSection('menusoal','active'); ?>
<?php $__env->startSection('eng','active menu-open'); ?>
<?php $__env->startSection('eng/soal','active'); ?>
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
              <h2>Data Soal Reading</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/reading/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="ex1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">cerita</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $reading; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($soal->soal); ?></td>
                  <td><?php echo e($soal->opsiA); ?></td>
                  <td><?php echo e($soal->opsiB); ?></td>
                  <td><?php echo e($soal->opsiC); ?></td>
                  <td><?php echo e($soal->opsiD); ?></td>
                  <td><?php echo e($soal->key); ?></td>
                  <td><?php echo e($soal->id_cerita); ?></td>
                  <td><?php echo e($soal->id_petunjuk); ?></td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/reading/show/<?php echo e($soal->id_soal); ?>">Edit</a>
                    <a data-id="reading/<?php echo e($soal->id_soal); ?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
                  </td>
                </tr>
                <?php
                    $no++;
                ?>
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

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Write Ekspresion</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/we/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="ex2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $write_ekspresion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($soal->soal); ?></td>
                  <td><?php echo e($soal->opsiA); ?></td>
                  <td><?php echo e($soal->opsiB); ?></td>
                  <td><?php echo e($soal->opsiC); ?></td>
                  <td><?php echo e($soal->opsiD); ?></td>
                  <td><?php echo e($soal->key); ?></td>
                  <td><?php echo e($soal->id_petunjuk); ?></td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/we/show/<?php echo e($soal->id_soal); ?>">Edit</a>
                    <a data-id="we/<?php echo e($soal->id_soal); ?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
                  </td>
                </tr>
                <?php
                    $no++;
                ?>
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

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Vocabulary</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/vocabulary/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="ex3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $vocabulary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($soal->soal); ?></td>
                  <td><?php echo e($soal->opsiA); ?></td>
                  <td><?php echo e($soal->opsiB); ?></td>
                  <td><?php echo e($soal->opsiC); ?></td>
                  <td><?php echo e($soal->opsiD); ?></td>
                  <td><?php echo e($soal->key); ?></td>
                  <td><?php echo e($soal->id_petunjuk); ?></td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/vocabulary/show/<?php echo e($soal->id_soal); ?>">Edit</a>
                    <a data-id="vocabulary/<?php echo e($soal->id_soal); ?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
                  </td>
                </tr>
                <?php
                    $no++;
                ?>
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

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Listening</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/listening/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="ex4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">sound</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                <?php $__currentLoopData = $listening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($soal->soal); ?></td>
                  <td><?php echo e($soal->opsiA); ?></td>
                  <td><?php echo e($soal->opsiB); ?></td>
                  <td><?php echo e($soal->opsiC); ?></td>
                  <td><?php echo e($soal->opsiD); ?></td>
                  <td><?php echo e($soal->key); ?></td>
                  <td><?php echo e($soal->id_sound); ?></td>
                  <td><?php echo e($soal->id_petunjuk); ?></td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/listening/show/<?php echo e($soal->id_soal); ?>">Edit</a>
                    <a data-id="listening/<?php echo e($soal->id_soal); ?>" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
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
      $('#ex2').DataTable()
      $('#ex3').DataTable()
      $('#ex4').DataTable()
      $(document).on("click", ".btn.btn-danger.btn-sm.del", function () {
        var id = $(this).data('id');
        $("#del").attr("href", 'eng/' + id + '/delete')
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoal\data_soal_eng.blade.php ENDPATH**/ ?>