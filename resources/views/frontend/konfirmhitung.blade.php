@extends('frontend/dashboard')
@section('pendaftar','active')

@section('content')

  <div class="container">
  <div class="row" style="margin-top: 20px;">
       <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{asset('img/icon.png')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Session()->get('nama')}}</h3>

              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Peserta&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: {{Session()->get('npm')}}</b>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir  : {{Session()->get('tgl')}}</b>
                </li>
                <li class="list-group-item">
                  <b>Kota&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{Session()->get('tmp')}}</b>
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
          <div class="box box-primary">
              <div class="box-body">
                 <div class="alert alert-danger alert-dismissible" style="font-family:'arial';font-size:20px;">
                <h4><i class="icon fa fa-bullhorn"></i> Harap Diperhatikan!</h4>
                Berikut adalah petunjuk soal yang harus anda cermati sebelum mengerjakan soal
              </div>
              <div class="callout callout-default" style="margin-left: 10px;">
                <h4 style="font-family:'arial';font-size:20px;">Waktu kalian mengerjakan adalah 4 menit.</h4>
              </div>
              <div class="callout callout-default" style="margin-left: 10px;">
                <h4 style="font-family:'arial';font-size:20px;">Jumlah soal terdapat 10 soal yang harus dikerjakan.Terdapat 4 pilihan jawaban setiap soalnya</h4>
              </div>              
              <div class="callout callout-default" style="margin-left: 10px;">
                <h4 style="font-family:'arial';font-size:20px;">Anda tidak dapat mengulangi soal yang terlewat. pastikan kalian menjawab dengan yakin</h4>
              </div>
              <div class="callout callout-default" style="margin-left: 10px;text-align:center;">
                <b> <h3 style="color:red;font-family:'arial';font-size:20px;">ANDA HARUS JUJUR DENGAN DIRI ANDA SENDIRI !!</h3></b>
              </div>

                <a href="{{url('/hitung/4')}}"><button class="btn btn-primary btn-block" sty><h4>Kerjakan Sekarang</h4></button></a>

              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
      </div>
  </div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){

    var stslogin = "{{session()->get('stslogin')}}";

    if (stslogin == 1) {
      swal(
      'Selamat Datang Dalam Tes Online',
      'Good Job',
      'success'
        );
    }

  });

</script>

@endsection
