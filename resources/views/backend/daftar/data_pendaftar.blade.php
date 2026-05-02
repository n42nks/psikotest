@extends('backend.dashboard')
@section('pendaftar','active')
@section('header')
<h1>List Data Peserta</h1>
@if(session('role') == '1')
    <a class="btn btn-primary" href="{{url('/admin/pendaftar/tambah')}}">Tambah Data</a>
@endif
{{-- <div class="container">
        <div class="row" style="padding-top: 30px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/admin/pendaftar/upload') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-success">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="">File (.xls, .xlsx)</label>
                                <input type="file" class="form-control" name="file">
                                <p class="text-danger">{{ $errors->first('file') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div> --}}
@endsection
@section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10%" style="text-align: center;">Nomer Daftar</th>
                  <th width="25%" style="text-align: center;">Nama</th>
                  <th width="10%" style="text-align: center;">Tanggal Lahir</th>
                  <th width="15%" style="text-align: center;">Tempat Lahir</th>
                  <th width="5%" style="text-align: center;">Telepon</th>
                  <th width="5%" style="text-align: center;">Password</th>
                  @if(session('role') == '1')
                    <th width="5%" style="text-align: center;">Opsi</th>
                  @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($tbpendaftar as $pendaftar)
                  <td>{{$pendaftar->NPM}}</td>
                  <td>{{$pendaftar->Nama}}</td>
                  <td>{{$pendaftar->Tgl_lahir}}</td>
                  <td>{{$pendaftar->Tmp_lahir}}</td>
                  <td>{{$pendaftar->Telp}}</td>
                  <td>{{$pendaftar->Password}}</td>
                  @if(session('role') == '1')
                    <td style="text-align:center;">
                        <a href="#" onclick="hapuspendaftar('{{url('/admin/pendaftar/hapus-'.$pendaftar->NPM)}}')" type="button" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  @endif
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    <div class="modal" id="modalDelete">
    <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        Anda Yakin ?
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
        <a class="btn btn-danger" href="" id="btnYa">YA</a>
    </div>

    </div>
</div>
</div>
@endsection

@section('js')

<script>
// $(document).ready(function(){

// })
function hapuspendaftar(npm){
    $('#btnYa').attr("href", npm);
    $('#modalDelete').modal();
}
// function random(){
//   var disc =["D","I","S","C"];
//   var acak = disc.sort(()=>Math.random() - 0.5);
//   $(".testing").html(acak);

// }
</script>
<script>
var sukses = 1;
    if(sukses = {{Session::get('status')}}){
        md.notif("top","right", "Berhasil ...", "info");
    }else{
        md.notif("top","right", "Gagal ...", "danger");
    }
</script>



@endsection
