
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

  <div class="container">
  <div class="row" style="margin-top: 20px;">
       <div class="col-md-3">


        </div>
         <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
              <div class="box-body">
                 <div class="alert bg-light-blue color-palette alert-dismissible">
                <h4><i class="icon fa fa-check-circle"></i> Good Job !!</h4>

              </div>

                 <div class="alert alert-primary alert-dismissible" style="text-align: center;">

                <h4 style="font-family:'arial';">SELAMAT ANDA TELAH MENGERJAKAN <br> TES ONLINE-DISC</h4>
                <img src="<?php echo e(asset('img/jempol.png')); ?>" id="img-logo" width="60%"><br>

              </div>

              <div class="row">
                <div class="col-md-12" style="font-family:'arial';margin-left:15px;font-size:16px;">
                  <center><b><h1>TES SELANJUTNYA</h1></b></center>            
                  <p>Tahap Test berikutnya kepada seluruh Calon Mahasiswa Baru Jurusan DCC </p>
                  <p>wajib membuat sebuah <b>Video Portofolio Diri</b> seperti contoh yang ada pada </p>
                  <p><b>LINK</b>: <a href="https://www.youtube.com/watch?v=9av06M9nLYs" target="_blank">klik Disini</a> </p>
                  <p>Kepada Peserta Test wajib perhatikan Contoh Video tersebut & Buatlah Video</p>
                  <p>Menggunakan Alat Minimal Camera Handphone dengan Content dan isi yang mirip dengan Video Tersebut durasi maksimal <b> 2 menit</b></p>
                  <p>Video Portofolio Diri anda harus dikirimkan kembali <b> paling lambat 2 hari</b> <br> setelah Test Hari ini melalui  No WA </p>
                  <p>Penghubung yang tertera sesuai dengan Wilayah nya Masing-masing... Terima Kasih... Semoga Sukses</p>
                </div>
              </div>

              <div class="row">

              </div>


                <a href="<?php echo e(url('/logout')); ?>"><button class="btn btn-primary btn-block" sty><h4>Logout</h4></button></a>

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

<script type = "text/javascript" >
  (function (global) { 

if(typeof (global) === "undefined") {
    throw new Error("window is undefined");
}

var _hash = "!";
var noBackPlease = function () {
    global.location.href += "#";

    // making sure we have the fruit available for juice (^__^)
    global.setTimeout(function () {
        global.location.href += "!";
    }, 50);
};

global.onhashchange = function () {
    if (global.location.hash !== _hash) {
        global.location.hash = _hash;
    }
};

global.onload = function () {            
    noBackPlease();

    // disables backspace on page except on input fields and textarea..
    document.body.onkeydown = function (e) {
        var Elm = e.target.nodeName.toLowerCase();
        if (e.which === 8 && (Elm !== 'input' && Elm  !== 'textarea')) {
            e.preventDefault();
        }
        // stopping event bubbling up the DOM tree..
        e.stopPropagation();
    };          
}

})(window);



  </script>

<script type="text/javascript">

  $(document).ready(function(){

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

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\frontend\selesai.blade.php ENDPATH**/ ?>