<?php $__env->startSection('css'); ?>
<style type="text/css">
  @media only screen and (max-width: 468px) {
    #img-logo {
      width: 90%;
    }
  }

</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>

        <div class="row"  style="background: url('<?php echo e(asset('img/header-bg.png')); ?>');padding-top: 10px;">
            <div class="col-md-12">
                 <center><img src="<?php echo e(asset('img/wec.png')); ?>" id="img-logo" style="margin-bottom: 10px;"></center>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="container" style="margin-top: 20px">

  <div class="box box-primary">
    <ol class="breadcrumb">
        <li>Test Online</li>
        <li class="active">Tes TPA</li>
        <li class="active"> <?php echo $soals[0]->kategori; ?></li>
      </ol>

        <div class="box-header with-border">
        <div class="col-md-11">
           <div class="alert bg-light-blue color-palette  alert-dismissible">
            <input type="" name="" id="noo" value="1" hidden="true">
                <h4> Soal Nomor <?php echo e($id); ?> <span id="no"></span></h4>
              </div>


        </div>
        <div class="col-md-1">
            <center><h3><span id="timer" style="font-family: arial;text-align: center;"></span></h3></center>
        </div>

        </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       	<div class="row">
       		<section class="col-lg-12 ">
       			<div class="box box-primary ">
	              <div class="box-header">
	                <h3 class="box-title" style="font-family:'arial';font-size:22px;"><?php echo $soals[0]->soal; ?></h3>


	                <!-- /.card-tools -->
	              </div>
	              <!-- /.card-header -->
	              <div class="box-body">
                  <form method="post" action="<?php echo e(route('peserta.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <input type="hidden" name="npm" value="<?php echo e(Session()->get('npm')); ?>">
                        <input type="hidden" name="id_soal" value="<?php echo e($id); ?>">
                        <?php $__currentLoopData = $soals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="<?php echo e($p->jawaban_soal); ?>" name="jawaban_soal" value="<?php echo e($p->jawaban_soal); ?>">
                          <label for="<?php echo e($p->jawaban_soal); ?>" class="custom-control-label" ><?php echo $p->isi_jawaban; ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                      <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-red">
                            <?php echo e($error); ?>

                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </div>

                    <div class="box-footer">
                      <?php if($id==$count): ?>
                        <button type="submit" class="pull-right btn btn-success"> Selesai</button>
                      <?php else: ?>
                        <button type="submit" class="pull-right btn btn-primary"> Selanjutnya</button>
                      <?php endif; ?>
                    </div>
                  </form>

	            </div>
       		</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
$('input[type="radio"].custom-control-input').iCheck({radioClass   : 'iradio_flat-blue'})


  var menit = "<?php echo e(session('menit')); ?>";
  var detik = "<?php echo e(session('detik')); ?>";
  document.getElementById('timer').innerHTML = menit + ":" + detik;
  startTimer();

  function startTimer()
  {
    var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if(s==59){
        m=m-1
      }
      $.get("<?php echo e(url('/setsession')); ?>"+"/"+m+"/"+s);
      if(m<0){
        window.location = "<?php echo e(url('/logout')); ?>";
      }
      else {

          document.getElementById('timer').innerHTML = m + ":" + s;
          setTimeout(startTimer, 1000);
      }

  }
  function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {sec = "0" + sec};
      if (sec < 0) {sec = "59"};
      return sec;
  }


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\frontend\tpa\soal.blade.php ENDPATH**/ ?>