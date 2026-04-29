
  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<br>
<div class="container-fluid">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Soal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <form action="<?php echo e(route('updatesoal')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">ID Soal</label>
                    <div class="row">
                      <div class="col-sm-1">
                         <input type="hidden" name="id_soal" value="<?php echo e($Soal->id_soal); ?>">
                      </div>
                    </div>
                   
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select name="id_kategori[]" class="form-control">
                      <option>Pilih Kategori</option>
                      <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($Soal->id_kategori==$data1->id_kategori): ?>
                      <option value="<?php echo e($data1->id_kategori); ?>" selected><?php echo e($data1->kategori); ?></option>
                      <?php else: ?>
                      <option value="<?php echo e($data1->id_kategori); ?>"><?php echo e($data1->kategori); ?></option>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div> 

                 <!--  <div class="form-group">
                   <label for="exampleInputEmail1">Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ..."><?php echo e($Soal->soal); ?></textarea>
                  </div> -->

                  <div class="form-group">
                   <label>Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ..."><?php echo e($Soal->soal); ?></textarea>
                    <script>
                        CKEDITOR.replace( 'soal' );
                    </script>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban A</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea style="width: 50%;" type="text" class="form-control" id="A" name="A"><?php echo e($Soal->A); ?></textarea>
                        <script>
                        CKEDITOR.replace( 'A' );
                        </script>
                      </div>
                    </div>
                    
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban B</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="B" name="B"><?php echo e($Soal->B); ?></textarea>
                        <script>
                        CKEDITOR.replace( 'B' );
                        </script>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban C</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="C" name="C"><?php echo e($Soal->C); ?></textarea>
                        <script>
                        CKEDITOR.replace( 'C' );
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban D</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="D" name="D"><?php echo e($Soal->D); ?></textarea>
                        <script>
                        CKEDITOR.replace( 'D' );
                        </script>
                      </div>
                    </div>
                  </div>

              
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kunci Jawaban</label>
                  
                    <div class="row">
                      <div class="col-sm-2">
                          <input type="text" value="<?php echo e($Soal->jawaban); ?>" class="form-control" id="jawaban" name="jawaban">
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/backend/DataSoalTpa/UbahSoal.blade.php ENDPATH**/ ?>