@extends('frontend.template')
@section('css')


<style type="text/css">


  @media only screen and (max-width: 468px) {
    #img-logo {
      width: 90%;
    }
  }
  .callout{
    padding: 5px 30px 1px 12px !important;
    margin-left: 10px !important;
  }


  .rd-mark {
    margin-left: 50px;
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .rd-mark input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  .rd-lb {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }
  .rd-mark:hover input ~ .rd-lb {
    background-color: #ccc;
  }
  .rd-mark input:checked ~ .rd-lb {
    background-color: #2196F3;
  }
  .rd-lb:after {
    content: "";
    position: absolute;
    display: none;
  }
  .rd-mark input:checked ~ .rd-lb:after {
    display: block;
  }
  .rd-mark .rd-lb:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
  }
  .ch-grb {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .ch-grb input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }
  .ch-mark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
  }
  .ch-grb:hover input ~ .ch-mark {
    background-color: #ccc;
  }
  .ch-grb input:checked ~ .ch-mark {
    background-color: #2196F3;
  }
  .ch-mark:after {
    content: "";
    position: absolute;
    display: none;
  }
  .ch-grb input:checked ~ .ch-mark:after {
    display: block;
  }
  .ch-grb .ch-mark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .mt-0{
    margin-top: 0px !important;
  }
  .cer{
    font-size: 17px;
    margin: 0px 11px;
  }
  .so{
    margin-left: 20px;
    margin-bottom: 25px;
  }
  .b-a, .playcount{
    margin-left: 12px;
  }
  .b-a{
    text-align: center;
  }
  .playau {
    height: 40px;
    width: 100px;
  }
  .fx{
    height: 37px;
    width: 100%;
    line-height: 29px;
    text-align: center;
    /* position: fixed; */
    /* background-color: red; */
    /* top: 0;
    right: 0;
    z-index: 99999; */
    /* border: 4px solid #ff9a3e; */
    font-weight: bold;
    color: #ff9a3e;
    /* background-color: rgba(255,255,255,0.2); */
    display: none;
    margin-top: 5px;
  }
  #timer{
    /* height: 20px; */
    font-size: 22px;
    width: 125px;
    margin: 0 auto;
    border: 4px solid #ff9a3e;
    background-color: rgba(255,255,255,0.2);
  }
  .sticky{
    top: 0;
    position: fixed;
    z-index: 99999;
  }
  .sticky > #timer{
    background-color: rgba(255,255,255,1);
  }
  .box-footer button{
    width: 150px;
  }
  form{
    margin-bottom: 50px;
  }
</style>

@endsection
@section('header')

        <div class="row head"  style="background: url('{{asset('img/header-bg.png')}}');padding-top: 10px;">
            <div class="col-md-12">
                 <center><img src="{{asset('img/wec.png')}}" id="img-logo" style="margin-bottom: 10px;"></center>
            </div>
        </div>
        <div class="fx" id="fxtime">
          <div id="timer">
           01 : 00 : 00
          </div>
        </div>

@endsection

@section('konten')
{{-- <div class="row">
  <div class="col-md-9">

  </div>
  <div class="col-md-3">
    <center><h3><span style="font-family: arial;text-align: center;" id="timerku"></span></h3></center>
  </div>
</div> --}}
<form id="frm_test" action="{{url('/save')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<input type="hidden" name="npm" value="{{Session()->get('npm')}}">
<div style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"
 unselectable="on"
 onselectstart="return false;"
 onmousedown="return false;" id="corongeselin" class="carousel slide carousel-fade container" data-ride="carousel" data-interval="false" data-wrap="false" data-touch="false">
  <div class="carousel-inner row" style="padding-top: 20px; padding-left: 20px;">


      <!-- konfirmasi -->
      <div class="item active">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{asset('img/icon.png')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Session()->get('nama')}}</h3>

              <p class="text-muted text-center">Digital Customer Service and Comunication</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Peserta&nbsp;&nbsp;&nbsp; &nbsp;: {{Session()->get('npm')}}</b>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir  : {{Session()->get('tgl')}}</b>
                </li>
                <li class="list-group-item">
                  <b>Kota&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:{{Session()->get('tmp')}}</b>
                </li>

              </ul>

              <a href="{{url('/logout')}}" class="btn btn-danger btn-block"><b>Logout</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <div class="col-md-7">

          <!-- Profile Image -->
          <div class="box instruc box-primary">
              <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                <h4><i class="icon fa fa-bullhorn"></i> Test Instructions!</h4>
                <!-- Berikut adalah petunjuk soal yang harus anda cermati sebelum mengerjakan soal -->
              </div>
              <div class="callout callout-default">
                <h4>Your time to do this test is {{ $waktu->waktu }} minutes.</h4>
              </div>
              <div class="callout callout-default">
                <h4>There are 4 parts in this test: Reading Comprehension, Structure and Written Expression, Vocabulary, and Listening Comprehension.</h4>
              </div>
              <div class="callout callout-default">
                <h4>You only have one opportunity to answer each item. You cannot go back to previous items</h4>
              </div>
              <div class="callout callout-default">
                <label class="ch-grb">I have read the test instructions and I understand
                  <input type="checkbox" id="agreeChecked">
                  <span class="ch-mark"></span>
                </label>
              </div>
              <button id="go" type="button" disabled href="#corongeselin" data-slide="next" class="btn btn-primary btn-block" sty><h4>Go!</h4></button>

              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
      </div>
      <!-- konfimasi -->

      <!-- reading -->
      @php ($noread = 1)
      @foreach ($reading as $read)

      <div class="item">
        <div class="box box-primary">
          <ol class="breadcrumb">
            <li>Test Online</li>
            <li>English Test</li>
            <li class="active">Part A</li>


          </ol>


          <!-- box-header -->
          <div class="box-header with-border">

            <div class="col-md-12">
              <h2 class="text-center mt-0">READING COMPREHENSION</h2>

                <div class="callout callout-default">
                  <h4 class="text-justify">{{ $read->petunjuk }}</h4>
                </div>

                <p class="text-justify cer">{{ $read->cerita }}</p>

            </div>
           {{-- <div class="col-md-1">
              <center><h3><span style="font-family: arial;text-align: center;">20:00</span></h3></center>
            </div> --}}

          </div>
          <!-- /.box-header -->

          <div class="box-body">

            <h3 class="so">{{$noread.". "}}{!! $read->soal !!}</h3>
            <label class="rd-mark">A. {{ $read->opsiA }}
              <input type="radio" class="form-check-input" value="{{ $read->opsiA }}" id="opt_a_{{$read->id_soal}}_A" name="{{$read->id_soal}}_A">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">B. {{ $read->opsiB }}
              <input type="radio" class="form-check-input" value="{{ $read->opsiB }}" id="opt_b_{{$read->id_soal}}_A" name="{{$read->id_soal}}_A">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">C. {{ $read->opsiC }}
              <input type="radio" class="form-check-input" value="{{ $read->opsiC }}" id="opt_c_{{$read->id_soal}}_A" name="{{$read->id_soal}}_A">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">D. {{ $read->opsiD }}
              <input type="radio" class="form-check-input" value="{{ $read->opsiD }}" id="opt_d_{{$read->id_soal}}_A" name="{{$read->id_soal}}_A">
              <span class="rd-lb"></span>
            </label>

          </div>

          <div class="box-footer" style="text-align: right" >
            <span id="wait"></span>
            <button type="button" class="btn btn-primary" href="#corongeselin" data-slide="next"><h5>Next</h5></button>
          </div>


        </div>
      </div>
      @php ($noread++)
      @endforeach
      <!-- /.reading -->

      <!-- writing -->
      @php ($nowrite = count($reading) + 1)
      @foreach ($writeekspresion as $write)
      <div class="item">
        <div class="box box-primary">
          <ol class="breadcrumb">
            <li>Test Online</li>
            <li>English Test</li>
            <li class="active">Part B</li>
          </ol>


          <!-- box-header -->
          <div class="box-header with-border">
            <div class="col-md-12">
              <h2 class="text-center mt-0">STRUCTURE AND WRITTEN EXPRESSION</h2>

                <div class="callout callout-default">
                  <h4 class="text-justify">{{ $write->petunjuk }}</h4>
                </div>

            </div>
            <!-- <div class="col-md-1">
              <center><h3><span style="font-family: arial;text-align: center;">20:00</span></h3></center>
            </div> 	 -->

          </div>
          <!-- /.box-header -->

          <div class="box-body">

            <h3 class="so">{{$nowrite.". "}}{!! $write->soal !!}</h3>
            <label class="rd-mark">A. {{ $write->opsiA }}
              <input type="radio" class="form-check-input" value="{{ $write->opsiA }}" id="opt_a_{{$write->id_soal}}_B" name="{{$write->id_soal}}_B">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">B. {{ $write->opsiB }}
              <input type="radio" class="form-check-input" value="{{ $write->opsiB }}" id="opt_b_{{$write->id_soal}}_B" name="{{$write->id_soal}}_B">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">C. {{ $write->opsiC }}
              <input type="radio" class="form-check-input" value="{{ $write->opsiC }}" id="opt_c_{{$write->id_soal}}_B" name="{{$write->id_soal}}_B">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">D. {{ $write->opsiD }}
              <input type="radio" class="form-check-input" value="{{ $write->opsiD }}" id="opt_d_{{$write->id_soal}}_B" name="{{$write->id_soal}}_B">
              <span class="rd-lb"></span>
            </label>

          </div>

          <div class="box-footer" style="text-align: right" >
            <span id="wait"></span>
            <button type="button" class="btn btn-primary" href="#corongeselin" data-slide="next"><h5>Next</h5></button>
          </div>


        </div>
      </div>
      @php ($nowrite++)
      @endforeach
      <!-- /.writing -->

      <!-- vocab -->
      @php ($novocab = count($reading) + 1 + count($writeekspresion))
      @foreach ($vocabulary as $vocab)
      <div class="item">
        <div class="box box-primary">
          <ol class="breadcrumb">
            <li>Test Online</li>
            <li>English Test</li>
            <li class="active">Part C</li>
          </ol>


          <!-- box-header -->
          <div class="box-header with-border">
            <div class="col-md-12">
              <h2 class="text-center mt-0">VOCABULARY</h2>

                <div class="callout callout-default">
                  <h4 class="text-justify">{{ $vocab->petunjuk }}</h4>
                </div>

            </div>
            <!-- <div class="col-md-1">
              <center><h3><span style="font-family: arial;text-align: center;">20:00</span></h3></center>
            </div> 	 -->

          </div>
          <!-- /.box-header -->

          <div class="box-body">

            <h3 class="so">{{$novocab.". "}}{!! $vocab->soal !!}</h3>
            <label class="rd-mark">A. {{ $vocab->opsiA }}
              <input type="radio" class="form-check-input" value="{{ $vocab->opsiA }}" id="opt_a_{{$vocab->id_soal}}_C" name="{{$vocab->id_soal}}_C">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">B. {{ $vocab->opsiB }}
              <input type="radio" class="form-check-input" value="{{ $vocab->opsiB }}" id="opt_b_{{$vocab->id_soal}}_C" name="{{$vocab->id_soal}}_C">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">C. {{ $vocab->opsiC }}
              <input type="radio" class="form-check-input" value="{{ $vocab->opsiC }}" id="opt_c_{{$vocab->id_soal}}_C" name="{{$vocab->id_soal}}_C">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">D. {{ $vocab->opsiD }}
              <input type="radio" class="form-check-input" value="{{ $vocab->opsiD }}" id="opt_d_{{$vocab->id_soal}}_C" name="{{$vocab->id_soal}}_C">
              <span class="rd-lb"></span>
            </label>

          </div>

          <div class="box-footer" style="text-align: right" >
            <span id="wait"></span>
            <button type="button" class="btn btn-primary" href="#corongeselin" data-slide="next"><h5>Next</h5></button>
          </div>


        </div>
      </div>
      @php ($novocab++)
      @endforeach
      <!-- /.vocab -->

      <!-- listening -->
      @php ($nolisten = count($reading) + 1 + count($writeekspresion) + count($vocabulary))
      @foreach ($listening as $listen)
      <div class="item">
        <div class="box box-primary">
          <ol class="breadcrumb">
            <li>Test Online</li>
            <li>English Test</li>
            <li class="active">Part D</li>
          </ol>


          <!-- box-header -->
          <div class="box-header with-border">
            <div class="col-md-12">
              <h2 class="text-center mt-0">LISTENING COMPREHENSION</h2>

                <div class="callout callout-default">
                  <h4 class="text-justify">{{ $listen->petunjuk }}</h4>
                </div>

                <audio id="audi">
                  <source src="data:audio/wav;base64,{{ $listen->sound }}" />
                </audio>

                <div class="b-a">
                  <button type="button" class="btn btn-primary btn-rounded btn-sm playau" ><i class="icon fa fa-play"></i> Play</button>
                  <span class="playcount ml-2">0 play</span>
                  <p class="ml-2 mr-2 mb-2"><i class="icon fa fa-exclamation-triangle" style="color: red"></i> The audio will stop after being played for 3 times. Make sure you have the audio system.</p>
                </div>


            </div>
            <!-- <div class="col-md-1">
              <center><h3><span style="font-family: arial;text-align: center;">20:00</span></h3></center>
            </div> 	 -->

          </div>
          <!-- /.box-header -->

          <div class="box-body">

            <h3 class="so">{{$nolisten.". "}}{!! $listen->soal !!}</h3>
            <label class="rd-mark">A. {{ $listen->opsiA }}
              <input type="radio" class="form-check-input" value="{{ $listen->opsiA }}" id="opt_a_{{$listen->id_soal}}_D" name="{{$listen->id_soal}}_D">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">B. {{ $listen->opsiB }}
              <input type="radio" class="form-check-input" value="{{ $listen->opsiB }}" id="opt_b_{{$listen->id_soal}}_D" name="{{$listen->id_soal}}_D">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">C. {{ $listen->opsiC }}
              <input type="radio" class="form-check-input" value="{{ $listen->opsiC }}" id="opt_c_{{$listen->id_soal}}_D" name="{{$listen->id_soal}}_D">
              <span class="rd-lb"></span>
            </label>
            <label class="rd-mark">D. {{ $listen->opsiD }}
              <input type="radio" class="form-check-input" value="{{ $listen->opsiD }}" id="opt_d_{{$listen->id_soal}}_D" name="{{$listen->id_soal}}_D">
              <span class="rd-lb"></span>
            </label>

          </div>

          <div class="box-footer" style="text-align: right" >
            <span id="wait"></span>
            <button type="button" class="btn btn-primary" href="#corongeselin" data-slide="next"><h5>Next</h5></button>
          </div>


        </div>
      </div>
      @php ($nolisten++)
      @endforeach
      <!-- /.listening -->

      <!-- konfirmasi -->
      <div class="item">
        <div class="box box-primary">
          <ol class="breadcrumb">
            <li>Test Online</li>
            <li>English Test</li>
            <li class="active">Part D</li>
          </ol>


          <!-- box-header -->
          <div class="box-header with-border">
            <div class="col-md-12">
              <h2 class="text-center mt-0">KONFIRMASI SUBMIT</h2>


            </div>
            <!-- <div class="col-md-1">
              <center><h3><span style="font-family: arial;text-align: center;">20:00</span></h3></center>
            </div> 	 -->

          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <div class="callout callout-default">
              <h4 class="text-justify">Click the button to submit your answer</h4>
            </div>
          </div>

          <div class="box-footer" style="text-align: right" id="submit_form">
            <span id="wait"></span>
            <button type="submit" class="btn btn-primary"><h5>Submit</h5></button>
          </div>


        </div>
      </div>
      <!-- /.konfirmasi -->

  </div>
</div>
</form>


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
  $(window).scroll(function(){
    var sticky = $('#fxtime'),
        scroll = $(window).scrollTop(),
        h = $('.head').height();

    if (scroll >= (h+10)) sticky.addClass('sticky');
    else sticky.removeClass('sticky');
  });
  $('#agreeChecked').on("change", function(e) {
    console.log($("#agreeChecked:checkbox").prop("checked"));
    if(!$("#agreeChecked:checkbox").prop("checked")){
      $("#go").prop("disabled", true);
    } else {
      $("#go").prop("disabled", false);
    }
  })
  $(document).bind('contextmenu', function(e) {
    return false;
  });
  $(document).ready(function(){
    var stslogin = "{{session()->get('stslogin')}}";

    if (stslogin == 1) {
      swal(
      'Selamat Datang Dalam Tes Online',
      'Good Job',
      'success'
        );
    }

    var readingAnswers = localStorage.getItem('log');
    if(readingAnswers) {
        // console.log("cek ", JSON.parse(readingAnswers).length)
        $("#corongeselin").carousel(JSON.parse(readingAnswers).length-1);
        if(JSON.parse(readingAnswers).length-1>=1){
          timerOn();
        }
        JSON.parse(readingAnswers).forEach(e => {
          var ele = document.getElementsByName(e.name);
          $("input[name='"+e.name+"'][value='"+e.value+"']").prop('checked', true);
        });
    }

    

    var count = 1;
    var aud = document.getElementById("audi")
    $(".playau").click(function(){
        aud.play();
        $(".playcount").text("1 play");
        $(".playau").attr( "disabled", "disabled" );
      // }

      // repeat();
    });

    aud.onended = function() {
      if(count < 3){
        count++;
        $(".playcount").text(count + " play");
        setTimeout(() => {
          this.play();
        }, 2000);
      }
    };

    $("#go").on("click", function(){
      timerOn();
    })

    function timerOn(){
      $.ajax({
        type:'POST',
        url:'{{url('/ajaxcek')}}',
        data:{ npm: "{!! Session()->get('npm') !!}", "_token": "{{ csrf_token() }}", },
        success:function(data){
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
          $('.fx').show();
          console.log('sukse ',data);
          var dt = data.success[0];
          var start = new Date(dt.start);
          var w = {!! $waktu->waktu !!};
          console.log(w);
          start.setMinutes(start.getMinutes()+parseInt(w));
          var countDownDate = new Date(start).getTime();
          // console.log(countDownDate);

          var x = setInterval(function() {
            var now = new Date().getTime();
            console.log(now);
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            // + minutes + "m " + seconds + "s ";
            $("#timer").text(('0'+hours).slice(-2) + " : "
            + ('0'+minutes).slice(-2) + " : " + ('0'+seconds).slice(-2));

            //simpan log
            var log = $("#frm_test").serializeArray();
            localStorage.setItem('log', JSON.stringify(log));
            // console.log(log);
            // var store = localStorage.get("dt");
            // oFormObject = document.forms['frm_test'];

            // if(store){
            //   $("#frm_test").append('isi',)
            // }

            if (distance < 0) {
              clearInterval(x);
              $("#timer").text("EXPIRED");
              $("#frm_test").submit();
              localStorage.setItem('log', "");
            }
          }, 1000);

        },error: function(err){
          console.log('error ' ,err);
        }
      });
    }

  });

</script>
@endsection
