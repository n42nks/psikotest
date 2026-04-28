<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Berhasil</title>
</head>
<body>
    <h2>Halo,</h2>
    <p>Berikut ini adalah informasi akun Anda:</p>

    <p><strong>Username:</strong> <?php echo e($nomorPendaftar); ?></p>
    <p><strong>Password:</strong> <?php echo e($password); ?></p>

    <p>Silakan gunakan data ini untuk login ke sistem kami.</p>

    <p>Terima kasih.</p>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\psikotest\resources\views\emails\registered.blade.php ENDPATH**/ ?>