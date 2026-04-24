@extends('backend/dashboard')
@section('hasilseluruh','active')
@section('header')
<h1>Hasil Jawaban seluruh</h1>
<br>
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" >
<!-- disc -->


<button type="button" class="btn btn-primary"v id="tampil">Tampilkan seluruh</button>
<span id="wait"></span>



<!-- inggris -->
<div class="row" id="tplTPA">

  </div>
  


@endsection
@section('js')
<script>
  $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

      $('#tampil').click(function() {
          $.ajax({
            url:"{{ url('/admin/hasilsemua') }}",
            type:'POST',
            beforeSend:function(){
            $("#wait").html("<div class='alert alert-danger alert-dismissible'><h4>TUNGGU SEBENTAR.. (Lama Karena Data banyak)</h4>")
          },
            success:function(data){
              console.log(data);
              var data = JSON.parse(data);
              $('#wait').html("");
              $('#tplTPA').html(data["data"]);
            },
            error:function(e){
                console.log(e.responseText);
                alert("Terjadi Kesalahan !");
            }

          });
      });

  });
</script>

@endsection