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
    <img src="<?php echo e(public_path('img/logo1.png')); ?>" style="margin-top: 20px;" id="img-logo">
    <h2>Hasil Test Bahasa Inggris</h2>
</div>
  <div id="content">
    <div id="article_1">
      <div id="article_header_1">
        <h3>NPM : <?php echo e($npm); ?> </h3>
      </div>
    <div id="article_2">
      <div id="article_header_2">
      </div>
        <h3>Nama : <?php echo e($nama); ?></h3>
    </div>
  </div>
</div>
<table style="width: 100%">
  <tr>
    <th>A. READING</th>
    <th>B. WRITE EXPRESSION</th>
    <th>C. VOCABULARY</th>
    <th>D. LISTENING</th>
  </tr>
  <tr>
    <td><?php echo e($A); ?></td>
    <td><?php echo e($B); ?></td>
    <td><?php echo e($C); ?></td>
    <td><?php echo e($D); ?></td>
  </tr>
</table>
<br>
<br>
<br>
<br>
</body>
</html><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasil\cetak_hasil_eng.blade.php ENDPATH**/ ?>