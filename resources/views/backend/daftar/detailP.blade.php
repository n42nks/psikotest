@extends('backend/dashboard')
@section('pendaftar','active')
@section('header') 
<h1>Data Hasil Jawaban</h1>
<br>
@endsection
@section('content')
  <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Ujian {{$pendaftar->nama}}</h3>

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
@endsection



<!-- js -->
@section('js')
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
@endsection