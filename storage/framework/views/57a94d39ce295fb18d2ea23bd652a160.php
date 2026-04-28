<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 15px;
            text-align: center;

        }
    </style>
    <style>
 div {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
  }
</style>
</head>
<body>
<div id="header" style="text-align: center;">
    <img src="<?php echo e(asset('img/logo1.png')); ?>" style="margin-top: 20px;" id="img-logo">
    <h2>Hasil Test TPA</h2>
</div>
  <div id="content">
    <div id="article_1">
      <div id="article_header_1">
        <h3>NPM : <?php echo e($cetak[0]->npm); ?> </h3>
    </div>
     <div id="article_2">
      <div id="article_header_2">
      </div>
        <h3>Nama : <?php echo e($cetak[0]->nama); ?></h3>
    </div>
  </div>
</div>
<table style="width: 100%">
  <tr>
    <th>Jumlah Soal</th>
    <th>Jumlah Benar</th>
    <th>Jumlah Salah</th>
  </tr>
  <?php $__currentLoopData = $cetak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($br->jumlah); ?></td>
    <td><?php echo e($br->hasil); ?></td>
    <td><?php echo e($br->salah); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br>
<br>
<br>
<br>
</body>
</html><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasiltpa\cetak_hasiltpa.blade.php ENDPATH**/ ?>