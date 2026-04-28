
  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
  <!-- ckeditor -->
  <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
 
<br>

<div class="container-fluid">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Soal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo e(route('tambahsoal')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">ID Soal</label>
                    <div class="row">
                      <div class="col-sm-1">
                         <input type="text" readonly=""  class="form-control" id="id_soal" name="id_soal" value="<?php $__currentLoopData = $Soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($data->id_soal+1); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" >
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option>Pilih Kategori</option>
                      <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($data1->id_kategori); ?>"><?php echo e($data1->kategori); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>

                  <div class="form-group">
                   <label>Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    <script>
                        // CKEDITOR.replace( 'soal' );
                        CKEDITOR.replace('soal', {
                            filebrowserBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=files')); ?>",
                            filebrowserImageBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=images')); ?>",
                            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=flash')); ?>",
                            filebrowserUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=files')); ?>",
                            filebrowserImageUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=images')); ?>",
                            filebrowserFlashUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=flash')); ?>"
                        });
                    </script>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban A</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea style="width: 50%;" type="text" class="form-control" id="A" name="A"></textarea>
                        <script>                        
                        CKEDITOR.replace('A', {
                            filebrowserBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=files')); ?>",
                            filebrowserImageBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=images')); ?>",
                            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=flash')); ?>",
                            filebrowserUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=files')); ?>",
                            filebrowserImageUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=images')); ?>",
                            filebrowserFlashUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=flash')); ?>"
                        });
                        </script>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban B</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="B" name="B"></textarea>
                        <script>                        
                        CKEDITOR.replace('B', {
                            filebrowserBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=files')); ?>",
                            filebrowserImageBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=images')); ?>",
                            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=flash')); ?>",
                            filebrowserUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=files')); ?>",
                            filebrowserImageUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=images')); ?>",
                            filebrowserFlashUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=flash')); ?>"
                        });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban C</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="C" name="C"></textarea>
                        <script>                        
                          CKEDITOR.replace('C', {
                            filebrowserBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=files')); ?>",
                            filebrowserImageBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=images')); ?>",
                            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=flash')); ?>",
                            filebrowserUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=files')); ?>",
                            filebrowserImageUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=images')); ?>",
                            filebrowserFlashUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=flash')); ?>"
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban D</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="D" name="D"></textarea>
                        <script>                        
                          CKEDITOR.replace('D', {
                            filebrowserBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=files')); ?>",
                            filebrowserImageBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=images')); ?>",
                            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckeditor/kcfinder/browse.php?type=flash')); ?>",
                            filebrowserUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=files')); ?>",
                            filebrowserImageUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=images')); ?>",
                            filebrowserFlashUploadUrl: "<?php echo e(asset('ckeditor/kcfinder/upload.php?type=flash')); ?>"
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kunci Jawaban</label>

                    <div class="row">
                      <div class="col-sm-2">
                          <input type="text" class="form-control" id="jawaban" name="jawaban">
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

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\DataSoalTpa\TambahSoal.blade.php ENDPATH**/ ?>