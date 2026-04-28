
<?php $__env->startSection('hasilseluruh', 'active'); ?>
<?php $__env->startSection('header'); ?>
    <h1>Hasil Tes CAT Seluruh Peserta</h1>
    <br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- disc -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-primary"v id="tampil">Tampilkan</button>
                            <span id="wait"></span>
                        </div>
                    </div>
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
                    <div id="tplTPA">

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#tampil').click(function() {
                $.ajax({
                    url: "<?php echo e(url('/admin/hasilsemua')); ?>",
                    type: 'POST',
                    beforeSend: function() {
                        $("#wait").html(
                            "<div class='alert alert-warning text-center'><b>⏳ Memuat data... (data banyak)</b></div>"
                        );
                    },
                    success: function(res) {
                        console.log(res);

                        $("#wait").html("");
                        $("#tplTPA").html(res.data);
                    },
                    error: function(e) {
                        console.log(e.responseText);
                        alert("Terjadi Kesalahan !");
                    }
                });
            });

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\hasil\hasil_seluruh.blade.php ENDPATH**/ ?>