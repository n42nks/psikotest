
<?php $__env->startSection('pendaftar','active'); ?>
<?php $__env->startSection('header'); ?> 
<h1>Data Hasil Jawaban</h1>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Ujian <?php echo e($pendaftar->nama); ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <div class="box box-info">
          <div id="chartHasil"></div>
          </div>
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
<?php $__env->stopSection(); ?>



<!-- js -->
<?php $__env->startSection('js'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chartHasil', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik'
    },
    xAxis: {
        categories: [
            'D',
            'I',
            'S',
            'C'
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
        data: [49.9, 71.5, 70.4, 70.2]
    }]
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\psikotest\resources\views\backend\daftar\detailP.blade.php ENDPATH**/ ?>