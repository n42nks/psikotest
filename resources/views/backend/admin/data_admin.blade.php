@extends('backend/dashboard')
@section('admin','active')
@section('header')
<h1>Data Admin</h1>
<br>
<a class="btn btn-primary" href="{{url('/admin/dataadmin/tambah')}}">Tambah Data</a>
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
                  <th width="5%">No.</th>
                  <th width="30%" style="text-align: center;">Nama</th>
                  <th width="30%" style="text-align: center;">User Name</th>
                  <th width="10%" style="text-align: center;">Hak Akses</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($tbadmin as $admin)
                  <td>{{$no}}</td>
                  <td>{{$admin->nama}}</td>
                  <td>{{$admin->username}}</td>
                  <td>
                    @if($admin->role == 1)
                        Super Admin
                    @else
                        Admin
                    @endif
                  </td>
                   <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="{{url('/admin/dataadmin/update-'.$admin->IdAdmin)}}">Edit</a>
                    <a href="#" onclick="hapusAdmin('{{url('/admin/dataadmin/hapus-'.$admin->IdAdmin)}}')" type="button" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
              @php
              $no++;
              @endphp
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
<br>

@endsection

@section('js')

<script>
// $(document).ready(function(){

// })
function hapusAdmin(idAdmin){
    $('#btnYa').attr("href", idAdmin);
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
