@extends('frontend/dashboard')
@section('pendaftar','active')
@section('css')
<style type="text/css">
  @media only screen and (max-width: 468px) {
    #img-logo {
      width: 90%;


    }
    #tmptbtn
    {
        text-align: center;
    }

  }
  
</style>
@endsection
@section('navbar-extra') 
  @if(session('status_test_selesai'))
    <li class="user user-menu">
      <a href="{{ url('/datahasil')}}">Hasil test</a>
    </li>
    <li class="user user-menu">
      <a href="{{ url('/info')}}">Informasi</a>
    </li>
  @endif
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" >
@php
use Carbon\Carbon;
@endphp
<div class="row">
<div class="col-lg-12">

    <div class="box">
    <div class="box-header with-border">        
        <img class="profile-user-img img-responsive img-circle" src="{{asset('img/icon.png')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Session()->get('nama')}}</h3>              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Peserta&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: {{Session()->get('npm')}}</b>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir  : {{ Carbon::parse(Session()->get('tgl'))->translatedFormat('d F Y') }}</b>

                </li>
                <li class="list-group-item">
                  <b>Kota&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{Session()->get('tmp')}}</b>
                </li>

              </ul>
    </div>
    <div class="box-body">
        <input type="hidden" id="npm" value="{{ $tbpendaftar[0]->NPM }}">
        <div id="datanpm">
        </div>
    </div>
    </div>

</div>
</div>


@endsection
@section('script')


<script type="text/javascript" src="{{asset('grafik.js')}}"></script>

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        let kd = $('#npm').val();
        console.log("Isi npm:", kd); // Pastik
        
        $.ajax({
            url: "{{ url('/ceknpm') }}",
            type: 'GET',
            data:{npm:kd},
            success: function(r) {
                console.log(r);
                // var result = JSON.parse(r);
                // $("#datanpm").html(result["data"]);
                $("#datanpm").html(r.data);
            },
            error: function(e) {
                console.log(e.responseText);
                alert("Terjadi Kesalahan !");
            }
        });    
    });

    // Highcharts.chart('chartHasil2', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Grafik Hasil TPA'
    //     },
    //     xAxis: {
    //         categories: [
    //             'SOAL',
    //             'BENAR',
    //             'SALAH',
    //             'HASIL'
    //         ],
    //         crosshair: true
    //     },
    //     yAxis: {
    //         min: 0,
    //         title: {
    //             text: 'Nilai'
    //         }
    //     },
    //     tooltip: {
    //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     plotOptions: {
    //         column: {
    //             pointPadding: 0.2,
    //             borderWidth: 0
    //         }
    //     },
    //     series: [{
    //         name: 'Hasil',
    //         data: [hasilta, hasiltb, hasiltc, hasiltd]
    //     }]
    // });

</script>
@endsection
