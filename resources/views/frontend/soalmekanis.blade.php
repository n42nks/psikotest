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
  .box-purple {
    height: 370px;

        overflow-y: scroll;
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

<div class="container" style="margin-top: 20px">
   <div class="col-md-12">
      <center><h3><span style="font-family: arial;text-align: center;" id="timer"></span></h3></center>
    </div>

<form id="yesform" action="" method="post">


    @csrf()
    <div class="box box-purple">
        <ol class="breadcrumb">
          <li>Test Online</li>
          <li class="active">Mekanis Teknologi</li>
          <!-- <li>Pilihlah jawaban pilihan ganda sesuai dengan kepribadian Anda</li> -->
        </ol>

        <div class="box-header with-border">
          <div class="col-md-12">
            <h2 class="text-center mt-0">Mekanis Teknologi</h2>
              <div class="callout callout-default">
              <h4 class="text-justify">Pada Test ini Pilihlan satu jawaban yang paling benar dari 4 pilihan jawaban yang tersedia. </h4>              
              </div>

          </div>

        </div>
        <div class="box-body">
          <?php $no=1;?>
          @foreach ($arit as $item)
          <div class="col-md-12">
            <div class="alert bg-purple color-palette alert-dismissible">
              <h4> Soal Nomor <span id="no">{{ $no++ }}</span></h4>
            </div>
          </div>
          
          <h3 class="box-title" style="margin-left: 20px; font-family: arial; font-size:16px;">{!! $item->soal !!}</h3>
          
          <div class="row" id="pnlSoal">
            <input type="hidden" name="{{ 'ferin'.$item->id_soal }}" value="{{ $item->id_soal }}">
            
            @php $tpa1 = ['A', 'B', 'C', 'D']; @endphp
            @foreach($tpa1 as $acak)
              <div class="col-md-12">
                <div style="margin-left: 20px;">
                  <label style="display: flex; align-items: center; font-size: 18px; padding: 6px 0;">
                    <input 
                      type="radio" 
                      name="{{ 'pilihan'.$item->id_soal }}" 
                      id="{{ $acak }}" 
                      value="{{ $acak }}" 
                      style="margin: 0 10px 0 0; transform: scale(1.2); display: inline-block; vertical-align: middle;"
                    >
                    <span style="display: inline-block; line-height: 1.2; vertical-align: middle; position: relative; top: 5px;">
                      {!! $item->$acak !!}
                    </span>
                  </label>

                </div>
              </div>
            @endforeach
          </div>
          @endforeach
        </div>
        <div class="box-footer" style="text-align: center">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-yesno"><h4>SIMPAN</h4></button>

                </div>
                <div class="col-md-4">

                </div>
            </div>

         </div>
          </div>



</div>

          <div class="modal fade" id="modal-yesno">
            <div class="modal-dialog" style="text-align: center">
              <div class="modal-content" style="width: 80%">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"><i class="icon fa fa-bullhorn"></i> Konfirmasi</h4>
                </div>
                <div class="modal-body" >
                  Apakah Anda Sudah Yakin ?
                </div>
                <div class="modal-footer" style="text-align: center">

                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-primary" id="yes">Yes</button>

                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        </form>





<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="icon fa fa-bullhorn"></i> Harap Diperhatikan</h4>
      </div>
      <div class="modal-body">
        <p>1. Scroll kebawah Untuk Melihat soal Selanjutnya</p><br>
        <p>2. Pastikan Kalian menjawab semuanya sebelum di klik tombol <b>SIMPAN</b></p><br>
        <p>3. Ketika Klik Mulai Maka Waktu Akan Akan Berjalan</p><br>
        <p>4.<b style="color: red">JANGAN SAMPAI KEHABISAN WAKTU</p></b>
        <p>5. Selamat Mengerjakan & Jangan Lupa Berdoa</p>
      </div>
      <div class="modal-footer" style="text-align: center">

        <button type="button" class="btn btn-primary" id="mulai">Klik Mulai </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@endsection

@section('script')
<script>
$(document).ready(function() {
  $('#modal-default').modal({backdrop:'static',keyboard:false});
  $('#modal-default').modal('show');
  var menit = "{{session('menit')}}";
    var detik = "{{session('detik')}}";
    document.getElementById('timer').innerHTML = menit + ":" + detik;

    $('input[type="radio"].radio1').iCheck({radioClass   : 'iradio_flat-blue'})

    $('#mulai').click(function() {
      $('#modal-default').modal('hide');
       startTimer();
    });

    $('#yes').click(function() {

      $('#yesform').attr('action', "{{url('/storedisc')}}");
    });

});
function startTimer()
  {

    var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if(s==59){
        m=m-1
      }
      $.get("{{url('/setsession')}}"+"/"+m+"/"+s);
      if(m<0){
        window.location = "{{url('/logout')}}";
      }
      else {

          document.getElementById('timer').innerHTML = m + ":" + s;
          setTimeout(startTimer, 1000);
      }

  }
  function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {sec = "0" + sec};
      if (sec < 0) {sec = "59"};
      return sec;

  }

</script>
@endsection
