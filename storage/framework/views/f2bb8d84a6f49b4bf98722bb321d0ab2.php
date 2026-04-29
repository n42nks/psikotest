<?php $__env->startSection('pendaftar', 'active'); ?>
<?php $__env->startSection('css'); ?>
    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('atas'); ?>
    <header class="main-header">

        <!-- LOGO -->
        <a href="#" class="logo" style="background:#243A6B; border-right:1px solid rgba(255,255,255,0.1);">
            <!-- FULL -->
            <span class="logo-lg">
                <img src="<?php echo e(asset('img/asia-putih.png')); ?>" height="50">
                <span style="color:white; font-size:13px; font-weight:bold;">
                    Sistem CAT
                </span>
            </span>
        </a>

        <!-- NAVBAR -->
        <nav class="navbar navbar-static-top" style="background:#243A6B; border:none; box-shadow:0 2px 8px rgba(0,0,0,0.1);">

            <!-- RIGHT MENU -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <?php echo $__env->yieldContent('navbar-extra'); ?>

                    <!-- USER -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <img src="<?php echo e(asset('img/logo_tok1.png')); ?>" class="user-image"
                                style="border-radius:50%; border:2px solid #F97316;">

                            <span class="hidden-xs" style="color:white;">
                                <?php echo e(session()->get('nama')); ?>

                            </span>
                        </a>

                        <!-- DROPDOWN -->
                        <ul class="dropdown-menu">

                            <li class="user-header" style="background:#243A6B;">
                                <img src="<?php echo e(asset('img/logo_tok1.png')); ?>" class="img-circle" alt="User Image">

                                <p>
                                    Sistem CAT<br>
                                    <small>Seleksi Perangkat Desa</small>
                                </p>
                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-danger btn-flat">
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <h3 style="margin-bottom:20px; font-weight:bold;">
            <i class="fa fa-desktop text-primary"></i> Dashboard Pilihan Soal CAT
        </h3>
        <?php
            $npm = session()->get('npm');

            $statusTes = DB::table('status_tes')->where('npm', $npm)->pluck('status', 'id_kategori');
        ?>
        <?php
            $menus = [
                [
                    'id' => 1,
                    'nama' => 'TWK',
                    'detail' => 'Tes Wawasan Kebangsaan',
                    'img' => 'atc.png',
                    'url' => '/peserta/1',
                ],
                [
                    'id' => 2,
                    'nama' => 'TIU',
                    'detail' => 'Tes Intelegensi Umum',
                    'img' => 'atc.png',
                    'url' => '/englishtest/2',
                ],
                [
                    'id' => 3,
                    'nama' => 'TKP',
                    'detail' => 'Tes Karakteristik Pribadi',
                    'img' => 'atc.png',
                    'url' => '/katatest/3',
                ],
                [
                    'id' => 4,
                    'nama' => 'PPD',
                    'detail' => 'Pengetahuan Pemerintahan Desa',
                    'img' => 'atc.png',
                    'url' => '/hitungtest/4',
                ],
                [
                    'id' => 5,
                    'nama' => 'PAPP',
                    'detail' => 'Pengetahuan Administrasi & Pelayanan Publik',
                    'img' => 'atc.png',
                    'url' => '/konsentest/5',
                ],
            ];
        ?>
        <?php
            $semuaSelesai = true;

            foreach ($menus as $m) {
                if (!isset($statusTes[$m['id']]) || $statusTes[$m['id']] != 1) {
                    $semuaSelesai = false;
                    break;
                }
            }
        ?>
        <?php if($semuaSelesai): ?>
            <div
                style="
                background: linear-gradient(135deg, #22c55e, #16a34a);
                color: white;
                border-radius: 16px;
                padding: 30px;
                text-align: center;
                margin-bottom: 25px;
                box-shadow: 0 10px 25px rgba(34,197,94,0.3);
                position: relative;
                overflow: hidden;animation: fadeUp 0.6s ease;">

                <!-- ICON BESAR -->
                

                <!-- TITLE -->
                <h3 style="font-weight:bold; margin-bottom:10px;">
                    Semua Tes Selesai!
                </h3>

                <!-- SUBTITLE -->
                <p style="opacity:0.9; margin-bottom:20px;">
                    Kamu sudah menyelesaikan seluruh rangkaian soal CAT
                </p>

                <!-- BUTTON -->
                <a href="<?php echo e(url('/datahasil')); ?>"
                    style="
                    display:inline-block;
                    padding:12px 30px;
                    background:white;
                    color:#16a34a;
                    font-weight:bold;
                    border-radius:999px;
                    text-decoration:none;
                    transition:0.3s;
                "
                    onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    🔍 Lihat Hasil Test
                </a>

                <!-- DECORATION -->
                <div
                    style="
                    position:absolute;
                    top:-30px;
                    right:-30px;
                    width:120px;
                    height:120px;
                    background:rgba(255,255,255,0.15);
                    border-radius:50%;
                ">
                </div>

            </div>
        <?php endif; ?>

        <div class="row">

            <!-- CARD -->


            <?php
                $bolehAkses = true;
            ?>

            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="box"
                        style="border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.08); margin-bottom:20px; transition:0.3s;">

                        <div class="box-body text-center">

                            <!-- ICON -->
                            <img src="<?php echo e(asset('img/' . $m['img'])); ?>" style="width:100px; margin-bottom:5px;">

                            <!-- TITLE -->
                            <h4 style="font-weight:bold; color:#243A6B;">
                                <?php echo e($m['nama']); ?>

                            </h4>

                            <!-- DESC -->
                            <p style="font-size:12px; color:#777;">
                                <?php echo e(strtolower($m['detail'])); ?>

                            </p>

                            <?php
                                $status = isset($statusTes[$m['id']]) ? $statusTes[$m['id']] : 0;
                            ?>

                            <?php if($status): ?>
                                <!-- ✅ SUDAH SELESAI -->
                                <button class="btn btn-block" style="background:#22c55e; color:white;" disabled>
                                    ✔ Selesai
                                </button>
                            <?php elseif($bolehAkses && !$semuaSelesai): ?>
                                <!-- ✅ BOLEH DIKERJAKAN -->
                                <a href="<?php echo e(url($m['url'])); ?>">
                                    <button class="btn btn-block"
                                        style="background:linear-gradient(90deg,#F97316,#FB923C); color:white; border-radius:8px;">
                                        ▶ Kerjakan
                                    </button>
                                </a>

                                <?php
                                    $bolehAkses = false; // 🔥 setelah ini, berikutnya dikunci
                                ?>
                            <?php else: ?>
                                <!-- 🔒 TERKUNCI -->
                                <button class="btn btn-block" style="background:#ccc; color:#666; cursor:not-allowed;"
                                    disabled>
                                    🔒 Terkunci
                                </button>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            localStorage.removeItem('currentSoal');
            localStorage.removeItem('sisaWaktu');
            localStorage.removeItem('totalSisa');

            // hapus semua jawaban
            for (let i = 1; i <= 100; i++) {
                localStorage.removeItem('pilihan' + i);
            }
            var stslogin = "<?php echo e(session()->get('stslogin')); ?>";

            if (stslogin == 2) {
                swal(
                    'Hayo Sudah Ngerjakan ya ..',
                    '',
                    'error'
                );
            }

            var ststpa = "<?php echo e(session()->get('ststpa')); ?>";

            if (ststpa == 1) {
                swal(
                    'Kerjakan Tes Wawasan Kebangsaan dulu ..',
                    '',
                    'error'
                );
            }
            var stsbig = "<?php echo e(session()->get('stsbig')); ?>";

            if (stsbig == 3) {
                swal(
                    'Kerjakan Aritmatika dulu ..',
                    '',
                    'error'
                );
            }

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/frontend/pilihsoal.blade.php ENDPATH**/ ?>