<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('/bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/AdminLTE.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/iCheck/square/blue.css')); ?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo e(url('/admin')); ?>"><b>LOGIN</b> ADMIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    	<div class="login-box-body">
    		<p class="login-box-msg">Sign in to start your session</p>
		      <form action="<?php echo e(url('/postlogin')); ?>" method="post">
		        <?php echo e(csrf_field()); ?>

		        <div class="form-group has-feedback">
		          <input type="text" class="form-control" name="username" placeholder="Username">
		          <span class="glyphicon glyphicon-user form-control-feedback"></span>
		            <?php if($errors->has('username')): ?>
		                <br><span class="error" style="color: red;" ><?php echo e($errors->first('username')); ?></span>
		            <?php endif; ?>
		          <!-- <span class="fa fa-envelope form-control-feedback"></span> -->
		        </div>
		        <div class="form-group has-feedback">
		          <input type="password" class="form-control" name="password" placeholder="Password">
		          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		          <?php if($errors->has('password')): ?>
		              <br><span class="error" style="color: red;" ><?php echo e($errors->first('password')); ?></span>
		          <?php endif; ?>
		          <!-- <span class="fa fa-lock form-control-feedback"></span> -->
		        </div><br>
		        <div class="row">
			        <div class="col-xs-8">
			        </div>
			        <!-- /.col -->
			        <div class="col-xs-4">
			          <button type="submit" class="btn btn-primary btn-block btn-flat">L O G I N</button>
			        </div>
			        <!-- /.col -->
			    </div>
		      </form>
		</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('/plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    if($('#sts_login').data("value") == "0"){
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Gagal Login | Tidak ada akses',
            type: 'error',
            confirmButtonText: 'OK'
        });
    }
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\psikotest\resources\views//backend/Login/login.blade.php ENDPATH**/ ?>