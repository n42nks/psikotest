
<?php $__env->startSection('admin','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Admin</h1>
<br>
<!-- <a class="btn btn-primary" href="<?php echo e(url('/admin/pemilikkos/tambah')); ?>">Tambah Data</a> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lengkapi Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo e(url('admin/dataadmin/update1')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <input type="hidden" name="IdAdmin" value="<?php echo e($admin->IdAdmin); ?>">
                 <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 ">Nama</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo e(old('nama') == "" ? $admin->nama : old('nama')); ?>">
                            <?php if($errors->has('nama')): ?>
                                <small class="text-danger"><?php echo e($errors->first('nama')); ?></small> 
                            <?php endif; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 ">User Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo e(old('username') == "" ? $admin->username : old('username')); ?>">
                            <?php if($errors->has('usernm')): ?>
                                <small class="text-danger"><?php echo e($errors->first('usernm')); ?></small> 
                            <?php endif; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 ">Password</label>

                  <div class="col-sm-8">
                   <input type="password" class="form-control" name="password" id="password" value="<?php echo e(old('password') == "" ? $admin->password : old('password')); ?>">
                        <?php if($errors->has('password')): ?>
                            <small class="text-danger"><?php echo e($errors->first('password')); ?></small> 
                        <?php endif; ?>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
    </form>
          </div>
         
        </div>
        <!--/.col (right) -->
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\admin\adminU.blade.php ENDPATH**/ ?>