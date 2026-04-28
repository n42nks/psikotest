
<?php $__env->startSection('pendaftar','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Tambah Data Pendaftar</h1>
<br>
<!-- <a class="btn btn-primary" href="<?php echo e(url('/admin/pemilikkos/tambah')); ?>">Tambah Data</a> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
<div class="col-lg-12">
    
    <div class="box">
        <div class="box-header with-border">
        <span class="text-primary" >* Isikan data dengan benar</span>
        <form method="POST" action="<?php echo e(url('admin/pendaftar/update1')); ?>" style="padding:5px 10px 0px 40px;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <input type="hidden" name="npm" value="<?php echo e($pendaftar->npm); ?>">
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Npm</label>
            <div class="col-sm-5">
                <input type="text" disabled="" class="form-control" value="<?php echo e(old('npm') == "" ? $pendaftar->npm : old('npm')); ?>" >
                <?php if($errors->has('npm')): ?>
                <small class="text-danger"><?php echo e($errors->first('npm')); ?></small> 
                <?php endif; ?>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" name="nama" id="nama" class="form-control"  placeholder="Masukan Nama" value="<?php echo e(old('nama') == "" ? $pendaftar->nama : old('nama')); ?>" > 
                <?php if($errors->has('nama')): ?>
                <small class="text-danger"><?php echo e($errors->first('nama')); ?></small> 
                <?php endif; ?>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kota</label>
            <div class="col-sm-5">
                <input type="text" name="kota" id="kota" class="form-control"  placeholder="Masukan Kota" value="<?php echo e(old('kota') == "" ? $pendaftar->kota : old('kota')); ?>" >
                <?php if($errors->has('kota')): ?>
                <small class="text-danger"><?php echo e($errors->first('kota')); ?></small> 
                <?php endif; ?>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">sekolah</label>
            <div class="col-sm-5">
                <input type="text" name="sekolah" id="sekolah" class="form-control"  placeholder="Masukan Sekolah" value="<?php echo e(old('sekoalah') == "" ? $pendaftar->sekolah : old('sekolah')); ?>" >
                <?php if($errors->has('sekolah')): ?>
                <small class="text-danger"><?php echo e($errors->first('sekolah')); ?></small> 
                <?php endif; ?>
            </div>
            </div>    
           
            <div class="form-group row">
                <div class="col-sm-3 "></div>
                <div class="col-sm-5">
                <button type="reset" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\daftar\pendaftarU.blade.php ENDPATH**/ ?>