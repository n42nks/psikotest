<?php $__env->startSection('datahasil', 'active'); ?>
<?php $__env->startSection('header'); ?>
    <h1>Data Hasil Jawaban</h1>
    <br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <span class="text-primary">* Cari Data Sesuai NPM</span>
                    <form method="POST" action="" id="frmnpm" style="padding:5px 10px 0px 40px;">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NPM</label>
                            <div class="col-sm-5">


                                <select class="form-control select2" name="npm" id="npm" style="width: 100%;">

                                    <option value="">Masukan NPM</option>
                                    <?php $__currentLoopData = $tbpendaftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option><?php echo e($itm->NPM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3 "></div>
                            <div class="col-sm-5">
                                <input type="button" name="submit2" id="btnLihatnpm" class="btn btn-primary btn-sm"
                                    value="Lihat npm">
                                <!-- <a href="<?php echo e(url('/admin/cek')); ?>">haha</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">

            <div class="box">
                <div class="box-header with-border">
                    * Hasil Pencarian
                </div>
                <div class="box-body">
                    <div id="datanpm">

                    </div>
                </div>
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>
    <script type="text/javascript" src="<?php echo e(asset('grafik.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $("#btnLihatnpm").click(function(e) {
                e.preventDefault();

                let npm = $("#npm").val();

                if (!npm) {
                    alert("Pilih NPM dulu!");
                    return;
                }

                $.ajax({
                    url: "<?php echo e(url('/admin/ceknpm')); ?>",
                    type: 'POST',
                    data: {
                        npm: npm
                    },
                    success: function(r) {
                        $("#datanpm").html(r.data);

                        grafik(
                            r.hasilD,
                            r.hasilI,
                            r.hasilS,
                            r.hasilC,
                            r.hasila,
                            r.hasilb,
                            r.hasilc,
                            r.hasild,
                            r.hasilta,
                            r.hasiltb,
                            r.hasiltc,
                            r.hasiltd
                        );
                    },
                    error: function(e) {
                        console.log(e.responseText);
                        alert("Terjadi Kesalahan Server!");
                    }
                });
            });
        });

        function grafik(hasilD, hasilI, hasilS, hasilC, hasila, hasilb, hasilc, hasild, hasilta, hasiltb, hasiltc,
        hasiltd) {
            Highcharts.chart('chartHasil2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Hasil Test'
                },
                xAxis: {
                    categories: [
                        'SOAL',
                        'BENAR',
                        'SALAH',
                        'HASIL'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Nilai'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Hasil',
                    data: [hasilta, hasiltb, hasiltc, hasiltd]
                }]
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\psikotest\resources\views/backend/hasil/data_hasil.blade.php ENDPATH**/ ?>