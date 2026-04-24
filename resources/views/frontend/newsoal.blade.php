@extends('frontend.template')
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
@section('header')

<div class="row align-items-center text-center py-3" style="background: url('{{ asset('img/header-bg.png') }}');">
  <div class="col-12 d-flex justify-content-center align-items-center">
      <img src="{{ asset('img/logo.png') }}" id="img-logo" class="img-circle mb-0" style="width: 5%; margin-right: 10px;padding-top:5px">
      <h2 class="mb-0" style="color:#fff;">INLASTEK WELDING PSIKOTEST</h2>
  </div>
</div>


@endsection

@section('konten')

<div class="container" style="margin-top: 20px">

  <div class="box box-primary">
  	<ol class="breadcrumb">
        <li>Test Online</li>
        <li class="active">Disc Test</li>
        <li>Kerjakan Dengan Teliti Dan Benar</li>
        
      </ol>

        <div class="box-header with-border">
       	<div class="col-md-11">
       		 <div class="alert bg-light-blue color-palette  alert-dismissible">
            <input type="" name="" id="noo" value="1" hidden="true" >
            <h4> Soal Nomor <span id="no"></span></h4><h4>
            <input type="hidden" style="color: black" value="" id="urutan">
              </div>
       	</div>
       	<div class="col-md-1">
       			<center><h3><span style="font-family: arial;text-align: center;" id="timer"></span></h3></center>
       	</div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row" id="pnlSoal">
            @php
            $disc = ["k_D","k_I","k_S","k_C"];
            shuffle ($disc);
              @endphp
            @foreach($soal as $s)
            <input type="text" name="jmlsoal" id="jmlsoal" value="{{$jmlsoal}}" hidden="true" >
          <input type="hidden" name="Idsoal" id="Idsoal" value="{{$s->Idsoal}}">
               @foreach($disc as $acak)

            <div class="col-md-12">
              <div style="margin-left: 20px;">
                <label style="font-size: 18px;">
                  <input type="radio" name="pilihan" id="{{$acak}}" value="{{$acak}}" class="radio1">
                    @php
                    echo $s->$acak;
                    @endphp
                </label>
              </div>
            </div>
                @endforeach
              @endforeach


            </div>
          </div>
           <div class="box-footer" style="text-align: right" id="tmptbtn">
            <span id="wait"></span>
            <span id="refresh"></span>
         		<button class="btn btn-primary" id="btnNextSoal"><h5>Soal Berikutnya</h5></button>
        </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>

@endsection()

@section('script')

<script type = "text/javascript" >
  (function (global) { 

if(typeof (global) === "undefined") {
    throw new Error("window is undefined");
}

var _hash = "!";
var noBackPlease = function () {
    global.location.href += "#";

    // making sure we have the fruit available for juice (^__^)
    global.setTimeout(function () {
        global.location.href += "!";
    }, 50);
};

global.onhashchange = function () {
    if (global.location.hash !== _hash) {
        global.location.hash = _hash;
    }
};

global.onload = function () {            
    noBackPlease();

    // disables backspace on page except on input fields and textarea..
    document.body.onkeydown = function (e) {
        var Elm = e.target.nodeName.toLowerCase();
        if (e.which === 8 && (Elm !== 'input' && Elm  !== 'textarea')) {
            e.preventDefault();
        }
        // stopping event bubbling up the DOM tree..
        e.stopPropagation();
    };          
}

})(window);



  </script>

<script type="text/javascript">
  
  $(document).ready(function(){
       
    $('input[type="radio"].radio1').iCheck({radioClass   : 'iradio_flat-blue'})
    
    var menit = "{{session('menit')}}";
    var detik = "{{session('detik')}}";
     var urutan = "{{session('angka')}}";

    document.getElementById('timer').innerHTML = menit + ":" + detik;
    document.getElementById('no').innerHTML = urutan;
    document.getElementById('urutan').value = urutan;
    startTimer();

    if (urutan == 40) {
      back();
      $('#tmptbtn').html('<button class="btn btn-primary" id="selesai"><h5>SELESAI</h5></button>')

      $('#selesai').click(function() {

        var pilihan = "";
        var pilihan1 = $('#k_D').val();
        var pilihan2 = $('#k_I').val();
        var pilihan3 = $('#k_S').val();
        var pilihan4 = $('#k_C').val();

        if ($('#k_D').is(':checked') == true  ) {
          pilihan = pilihan1
        }
        else if ($('#k_I').is(':checked') == true  ) {
          pilihan = pilihan2
        }
        else if ($('#k_S').is(':checked') == true  ) {
          pilihan = pilihan3
        }
        else if ($('#k_C').is(':checked') == true  ) {
          pilihan = pilihan4
        }
                  
                  $.ajax({
                  url: "{{url('/storeJawaban')}}",
                  type: "POST",
                  data:{Idsoal:40,pilihan:pilihan},
                  success:function(data)
                  {
                      console.log(data);
                    window.location = "{{url('/selesai')}}"


                  },
                  error:function(data) {
                      console.log(data);
                     }


                });


              });


    }
   


      $.ajaxSetup({
            headers: {
           'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                    }
             });
       
     
      $('#btnNextSoal').click(function() {

        var pilihan = "";
        var Idsoal = $('#Idsoal').val();

        urutan = parseInt(urutan) + 1;

        $.get("{{url('/setyoga')}}"+"/"+urutan);
       



        var jmlsoal = $('#jmlsoal').val();
        var pilihan1 = $('#k_D').val();
        var pilihan2 = $('#k_I').val();
        var pilihan3 = $('#k_S').val();
        var pilihan4 = $('#k_C').val();

        if ($('#k_D').is(':checked') == true  ) {
          pilihan = pilihan1
        }
        else if ($('#k_I').is(':checked') == true  ) {
          pilihan = pilihan2
        }
        else if ($('#k_S').is(':checked') == true  ) {
          pilihan = pilihan3
        }
        else if ($('#k_C').is(':checked') == true  ) {
          pilihan = pilihan4
        }

        $.ajax({
          url: "{{url('/storeJawaban')}}",
          type: "POST",
          data:{Idsoal:Idsoal,pilihan:pilihan},
          beforeSend:function(){
            $("#wait").html("<div class='alert alert-danger alert-dismissible'><h4>TUNGGU SEBENTAR.. (Tekan Refresh Dibawah Apabila Soal Tidak Muncul lebih Dari 10 detik )</h4>")
            $("#refresh").html("<h4><a href='' id='refresh'>Refresh </a></h4>");
            $('#pnlSoal').hide();
            $("#btnNextSoal").hide();
          },
          success:function(data)
          {

            $("#wait").html("")
            $("#refresh").html("");
            $('#pnlSoal').show();
            $("#btnNextSoal").show();

            console.log(data);
          },
          error:function(data) {
              console.log(data);
             }


        });
        $.ajax({
          url : "{{url('soal-disc/')}}" +  "/" + urutan,
          type : "GET",
           success:function(data) {
               console.log(data);
               $.get("{{url('/setyoga')}}"+"/"+urutan);
               var soal = JSON.parse(data);
               $('#urutan').val('');
               $('#no').html(""); 
               document.getElementById("no").innerHTML = urutan;
               $('#urutan').val(urutan);
                $('#pnlSoal').html('');
                $('#pnlSoal').html(soal['data']);
                $('input[type="radio"].radio1').iCheck({radioClass   : 'iradio_flat-blue'});
                  if (urutan == 40) {
                  back();  
                  $('#tmptbtn').html('<button class="btn btn-primary" id="selesai"><h5>SELESAI</h5></button>')

                  $('#selesai').click(function() {
                  
                      $.ajax({
                      url: "{{url('/storeJawaban')}}",
                      type: "POST",
                      data:{Idsoal:40,pilihan:pilihan},
                      beforeSend:function(){
                        $("#wait").html("<div class='alert alert-danger alert-dismissible'>TUNGGU SEBENTAR..")
                        $("#btnNextSoal").hide();
                      },
                      success:function(data)
                      {
                          console.log(data);
                        window.location = "{{url('/selesai')}}"


                      },
                      error:function(data) {
                          console.log(data);
                         }


                    });


                  });
                 }

            },
            error:function(data) {
              console.log(data);
             }

        });

        $('#refresh').click(function() {
            window.location.reload();
        });
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
  
  function back()
  {
    (function (global) { 

if(typeof (global) === "undefined") {
    throw new Error("window is undefined");
}

var _hash = "!";
var noBackPlease = function () {
    global.location.href += "#";

    // making sure we have the fruit available for juice (^__^)
    global.setTimeout(function () {
        global.location.href += "!";
    }, 50);
};

global.onhashchange = function () {
    if (global.location.hash !== _hash) {
        global.location.hash = _hash;
    }
};

global.onload = function () {            
    noBackPlease();

    // disables backspace on page except on input fields and textarea..
    document.body.onkeydown = function (e) {
        var Elm = e.target.nodeName.toLowerCase();
        if (e.which === 8 && (Elm !== 'input' && Elm  !== 'textarea')) {
            e.preventDefault();
        }
        // stopping event bubbling up the DOM tree..
        e.stopPropagation();
    };          
}

})(window);
  }

  

  





</script>

@endsection
