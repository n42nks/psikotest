<?php $__env->startSection('pendaftar','active'); ?>
<?php $__env->startSection('css'); ?>
<style type="text/css">
  @media only screen and (max-width: 468px) {
    #img-logo {
      width: 90%;


    }
    #tmptbtn
    {
        text-align: center;
    }




  }
  
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="container">
  <div class="row" style="margin-top: 20px;">
       <div class="col-md-3">


        </div>
         <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-purple">
              <div class="box-body">
                 <div class="alert bg-purple color-palette alert-dismissible">
                <h4><i class="icon fa fa-check-circle"></i>  Test Complete.</h4>

              </div>

                 <div class="alert alert-primary alert-dismissible" style="text-align: center;">

                <h4>Anda telah menyelesaikan tes. Silakan tunggu informasi selanjutnya dari kami.</h4>
                <img src="<?php echo e(asset('img/jempol.png')); ?>" id="img-logo" width="60%">
              </div>

              <div class="row" style="font-family:arial;text-align:center;">
                  <div class="col-md-6">
                    <b>
                      <p>Malang</p>
                      <p>Admin : 0859 6676 3030 </p>
                    </b>
                  </div>
                  <div class="col-md-6">
                    <b>
                    <p>Solo</p>
                    <p>Admin : 0859 6676 3031 </p>
                  </b>
                  </div>
                  

              </div>

                <a href="<?php echo e(url('/pilihsoal')); ?>"><button class="btn btn-purple btn-block" sty><h4>Back To Menu Pilih Soal</h4></button></a>

              </div>
            <!-- /.box-body -->
          </div>


          <!-- /.box -->
          <!-- /.box -->
        </div>
        <div class="col-md-3">


        </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){

    localStorage.setItem('log', '');
    var stslogin = "<?php echo e(session()->get('stslogin')); ?>";

    if (stslogin == 1) {
      swal(
      'Selamat Datang Dalam Tes Online',
      'Good Job',
      'success'
        );
    }

  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\frontend\finish.blade.php ENDPATH**/ ?>