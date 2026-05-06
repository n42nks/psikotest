<?php $__env->startSection('pendaftar', 'active'); ?>
<?php $__env->startSection('css'); ?>
    <style type="text/css">
        html,
        body {
            height: 100%;
            overflow: hidden;
            /* 🔥 hilangkan scroll global */
        }

        /* CARD FULL SCREEN */
        .box-purple {
            height: calc(100vh - 90px);
            /* tinggi layar dikurangi header */
            display: flex;
            flex-direction: column;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* HEADER */
        .box-header {
            background: linear-gradient(90deg, #243A6B, #1e2f57);
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* BODY FLEX TANPA SCROLL */
        .box-body {
            flex: 1;
            overflow-y: auto;
            /* ✅ biar bisa scroll */
            padding: 30px 60px;
            scroll-behavior: smooth;
        }

        /* FOOTER */
        .box-footer {
            padding: 15px;
            border-top: 1px solid #eee;
        }

        /* SOAL */
        .soal-text {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* OPSI */
        .opsi {
            display: flex;
            /* 🔥 penting */
            align-items: flex-start;
            /* 🔥 biar text mulai dari atas */
            gap: 12px;

            border: 1px solid #ddd;
            padding: 14px 16px;
            border-radius: 10px;
            margin-bottom: 12px;

            cursor: pointer;
            transition: 0.2s;

            background: white;
        }

        /* HOVER */
        .opsi:hover {
            background: #f8fafc;
            border-color: #6366f1;
        }

        /* RADIO */
        .opsi input {
            margin-top: 4px;
            /* 🔥 sejajarkan dengan text */
            transform: scale(1.2);
            flex-shrink: 0;
        }

        /* TEXT DALAM OPSI */
        .opsi span {
            flex: 1;
            white-space: normal;
            /* 🔥 WAJIB */
            word-break: break-word;
            /* 🔥 anti kepotong */
            line-height: 1.6;
        }

        /* SELECTED */
        .opsi.active {
            background: #eef2ff;
            border-color: #6366f1;
        }

        /* TIMER */
        #timerSoal {
            font-size: 20px;
            font-weight: bold;
            color: #F97316;
        }

        /* BUTTON */
        .btn-next {
            background: linear-gradient(90deg, #F97316, #FB923C);
            color: white;
            border-radius: 10px;
            font-weight: bold;
            padding: 10px 25px;
        }

        .header-modern {
            background: linear-gradient(135deg, #243A6B, #1e2f57);
            color: white;
            padding: 20px;
            border-radius: 16px 16px 0 0;
        }

        .header-modern .title {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .soal-item {
            max-width: 900px;
            margin: 0 auto;
        }

        .timer-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* BOX TIMER */
        .timer-box {
            padding: 12px 20px;
            border-radius: 12px;
            text-align: center;
            min-width: 140px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* LABEL */
        .timer-box .label {
            font-size: 12px;
            opacity: 0.8;
        }

        /* VALUE */
        .timer-box .value {
            font-size: 22px;
            font-weight: bold;
            margin-top: 5px;
        }

        /* TOTAL (HIJAU) */
        .timer-box.total {
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid #22c55e;
        }

        .timer-box.total .value {
            color: #22c55e;
        }

        /* SOAL (ORANGE) */
        .timer-box.soal {
            background: rgba(249, 115, 22, 0.15);
            border: 1px solid #F97316;
        }

        .timer-box.soal .value {
            color: #F97316;
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .box-body {
                padding: 20px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('atas'); ?>
    <header class="main-header">

        <!-- LOGO -->
        <a href="#" class="logo" style="background:#243A6B; border-right:1px solid rgba(255,255,255,0.1);">

            <!-- MINI -->
            

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
<?php $__env->startSection('navbar-extra'); ?>
    <?php if(session('status_test_selesai')): ?>
        <li class="user user-menu">
            <a href="<?php echo e(url('/datahasil')); ?>">Hasil test</a>
        </li>
        <li class="user user-menu">
            <a href="<?php echo e(url('/info')); ?>">Informasi</a>
        </li>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form id="yesform" action="<?php echo e(url('/storetpa')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="waktu_habis" id="waktu_habis" value="0">
        <div class="box box-purple">

            <!-- HEADER -->
            <div class="box-header header-modern">
                <h4 class="title">Tes Pengetahuan Tentang Pemerintahan / Pemerintah Desa</h4>

                <div class="timer-wrapper">

                    <!-- TOTAL -->
                    <div class="timer-box total">
                        <div class="label">⏱ Total Waktu</div>
                        <div id="timerTotal" class="value"></div>
                    </div>

                    <!-- SOAL -->
                    <div class="timer-box soal">
                        <div class="label">⚡ Waktu Soal</div>
                        <div id="timerSoal" class="value"></div>
                    </div>

                </div>
            </div>

            <!-- BODY -->
            <div class="box-body">

                <div id="soal-container">

                    <?php $__currentLoopData = $tpa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="soal-item" data-index="<?php echo e($index); ?>" style="display:none;">
                            <input type="hidden" name="<?php echo e('ferin' . $item->id_soal); ?>" value="<?php echo e($item->id_soal); ?>">
                            <input type="hidden" name="id_kat" value="<?php echo e($item->id_kategori); ?>">
                            <input type="hidden" name="npm" value="<?php echo e(session('npm')); ?>">
                            <h4 style="margin-bottom:10px;">
                                Soal No. <b><?php echo e($index + 1); ?></b>
                            </h4>

                            <div class="soal-text">
                                <?php echo $item->soal; ?>

                            </div>

                            <?php $opsi = ['A','B','C','D','E']; ?>

                            <?php $__currentLoopData = $opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="opsi">
                                    <input type="radio" name="pilihan<?php echo e($item->id_soal); ?>" value="<?php echo e($o); ?>">
                                    <span><?php echo $item->$o; ?></span>
                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="box-footer text-center">
                <button type="button" class="btn btn-next" id="nextBtn">
                    Selanjutnya
                </button>
            </div>

        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {

            let soal = $('.soal-item');
            let totalSoal = soal.length;

            let totalMenit = <?php echo e(session('menit')); ?>;
            let totalDetik = <?php echo e(session('detik')); ?>;

            let totalWaktu = (totalMenit * 60) + totalDetik;
            let waktuPerSoal = Math.floor(totalWaktu / totalSoal);

            let totalSisa = localStorage.getItem('totalSisa') ?
                parseInt(localStorage.getItem('totalSisa')) :
                totalWaktu;

            // 🔥 AMBIL DARI STORAGE
            let current = localStorage.getItem('currentSoal') ? parseInt(localStorage.getItem('currentSoal')) : 0;
            let sisa = localStorage.getItem('sisaWaktu') ? parseInt(localStorage.getItem('sisaWaktu')) :
                waktuPerSoal;

            let timer;

            tampilSoal(current);
            startTimer();
            startTotalTimer();

            function startTotalTimer() {

                setInterval(function() {

                    let m = Math.floor(totalSisa / 60);
                    let s = totalSisa % 60;

                    $('#timerTotal').html(
                        m + ":" + (s < 10 ? '0' : '') + s
                    );

                    localStorage.setItem('totalSisa', totalSisa);

                    totalSisa--;

                    if (totalSisa < 0) {
                        localStorage.clear();
                        $('#yesform').submit();
                    }

                }, 1000);
            }

            function updateButton() {
                if (current === totalSoal - 1) {
                    $('#nextBtn').text('Simpan');
                } else {
                    $('#nextBtn').text('Selanjutnya');
                }
            }

            function tampilSoal(index) {
                soal.hide();
                $(soal[index]).fadeIn(200);

                updateButton(); // 🔥 penting
            }

            function startTimer() {

                timer = setInterval(function() {

                    let m = Math.floor(sisa / 60);
                    let s = sisa % 60;

                    $('#timerSoal').html(m + ":" + (s < 10 ? '0' : '') + s);

                    // 🔥 SIMPAN STATE
                    localStorage.setItem('currentSoal', current);
                    localStorage.setItem('sisaWaktu', sisa);

                    sisa--;

                    if (sisa < 0) {
                        clearInterval(timer);
                        nextSoal();
                    }

                }, 1000);
            }

            function nextSoal() {

                clearInterval(timer);

                current++;
                sisa = waktuPerSoal;

                if (current >= totalSoal) {
                    localStorage.removeItem('totalSisa');
                    localStorage.clear(); // reset setelah selesai
                    setTimeout(function() {
                        $('#yesform').submit();
                    }, 200); // kasih jeda sedikit
                } else {
                    tampilSoal(current);
                    startTimer();
                }
            }

            $('#nextBtn').click(function() {

                if (current === totalSoal - 1) {
                    // 🔥 kalau soal terakhir → submit
                    localStorage.clear();
                    localStorage.removeItem('totalSisa');
                    setTimeout(function() {
                        $('#yesform').submit();
                    }, 200); // kasih jeda sedikit
                } else {
                    nextSoal();
                }

            });

            if (totalSisa < 60) {
                $('#timerTotal').parent().css({
                    background: '#fee2e2',
                    border: '1px solid red'
                });
            }
            if (totalSisa < 0) {

                $('#waktu_habis').val(1); // 🔥 tandai waktu habis

                $('#yesform').submit();
            }
            // 🔥 SIMPAN JAWABAN
            $('input[type=radio]').on('change', function() {
                let name = $(this).attr('name');
                let val = $(this).val();
                localStorage.setItem(name, val);
            });

            // 🔥 LOAD JAWABAN
            $('input[type=radio]').each(function() {
                let name = $(this).attr('name');
                let saved = localStorage.getItem(name);

                if (saved && $(this).val() === saved) {
                    $(this).prop('checked', true);
                    $(this).closest('.opsi').addClass('active');
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/frontend/soaleng.blade.php ENDPATH**/ ?>