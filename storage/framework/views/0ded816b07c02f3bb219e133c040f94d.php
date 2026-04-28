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
    <h2>Hasil Test Bahasa Inggris</h2>
</div>
  
<table style="width: 100%">
  <tr>
    
    <th width="5%" style="text-align: center;">NPM</th>
    <th width="35%" style="text-align: center;">Nama</th>
    <th width="10%" style="text-align: center;">Reading</th>
    <th width="10%" style="text-align: center;">Write</th>
    <th width="10%" style="text-align: center;">Vocab.B</th>
    <th width="10%" style="text-align: center;">Listen</th>
    <th width="25%" style="text-align: center;">Total</th>
  </tr>
  <?php
  $no=1;
  ?>
  <?php for($i = 0; $i < count($res); $i++): ?>
  <tr>
    <td style="text-align: center;"> <?php echo e($res[$i]["NPM"]); ?> </td>
    <td style="text-align: center;"><?php echo e($res[$i]["NAMA"]); ?></td>
    <td style="text-align: center;"><?php echo e($res[$i]["rd"]); ?></td>
    <td style="text-align: center;"><?php echo e($res[$i]["wr"]); ?></td>
    <td style="text-align: center;"><?php echo e($res[$i]["vb"]); ?></td>
    <td style="text-align: center;"><?php echo e($res[$i]["lt"]); ?></td>
    <td style="text-align: center;"><?php echo e($res[$i]["rd"]+$res[$i]["wr"]+$res[$i]["vb"]+$res[$i]["lt"]); ?></td>
  </tr>
<?php
$no++;
?>
 <?php endfor; ?>
</table>
<br>
<br>
<br>
<br>
</body>
</html><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasil\cetak_hasiling.blade.php ENDPATH**/ ?>