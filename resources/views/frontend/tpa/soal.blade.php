@extends('frontend.template')
@section('css')
<style type="text/css">
  @media only screen and (max-width: 468px) {
    #img-logo {
      width: 90%;
    }
  }

</style>

@endsection
@section('header')

        <div class="row"  style="background: url('{{asset('img/header-bg.png')}}');padding-top: 10px;">
            <div class="col-md-12">
                 <center><img src="{{asset('img/wec.png')}}" id="img-logo" style="margin-bottom: 10px;"></center>
            </div>
        </div>

@endsection

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="container" style="margin-top: 20px">

  <div class="box box-primary">
    <ol class="breadcrumb">
        <li>Test Online</li>
        <li class="active">Tes TPA</li>
        <li class="active"> {!!$soals[0]->kategori!!}</li>
      </ol>

        <div class="box-header with-border">
        <div class="col-md-11">
           <div class="alert bg-light-blue color-palette  alert-dismissible">
            <input type="" name="" id="noo" value="1" hidden="true">
                <h4> Soal Nomor {{$id}} <span id="no"></span></h4>
              </div>


        </div>
        <div class="col-md-1">
            <center><h3><span id="timer" style="font-family: arial;text-align: center;"></span></h3></center>
        </div>

        </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       	<div class="row">
       		<section class="col-lg-12 ">
       			<div class="box box-primary ">
	              <div class="box-header">
	                <h3 class="box-title" style="font-family:'arial';font-size:22px;">{!!$soals[0]->soal!!}</h3>


	                <!-- /.card-tools -->
	              </div>
	              <!-- /.card-header -->
	              <div class="box-body">
                  <form method="post" action="{{route('peserta.store')}}">
                    {{csrf_field()}}
                      <div class="form-group">
                        <input type="hidden" name="npm" value="{{Session()->get('npm')}}">
                        <input type="hidden" name="id_soal" value="{{$id}}">
                        @foreach($soals as $p)
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="{{$p->jawaban_soal}}" name="jawaban_soal" value="{{$p->jawaban_soal}}">
                          <label for="{{$p->jawaban_soal}}" class="custom-control-label" >{!!$p->isi_jawaban!!}</label>
                        </div>
                        @endforeach
                      </div>
                      @if ($errors->any())
                        @foreach ($errors->all() as $error)
                          <div class="text-red">
                            {{ $error }}
                          </div>
                        @endforeach
                      @endif
                    </div>

                    <div class="box-footer">
                      @if($id==$count)
                        <button type="submit" class="pull-right btn btn-success"> Selesai</button>
                      @else
                        <button type="submit" class="pull-right btn btn-primary"> Selanjutnya</button>
                      @endif
                    </div>
                  </form>

	            </div>
       		</section>

@endsection()

@section('script')

<script type="text/javascript">
$('input[type="radio"].custom-control-input').iCheck({radioClass   : 'iradio_flat-blue'})


  var menit = "{{session('menit')}}";
  var detik = "{{session('detik')}}";
  document.getElementById('timer').innerHTML = menit + ":" + detik;
  startTimer();

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
