@extends('backend/dashboard')
  <!-- Content Wrapper. Contains page content -->
@section('content')
@section('tpa','active')
@section('menusoal','active')
@section('header')
<h1>Input Data Soal</h1>
<br>
<a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="soal-tpa/show">Tambah Data</a>

@endsection
    <!-- Content Header (Page header) -->
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
                <th>ID Soal</th>
                <th>Soal</th>
                <th>Jawaban</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($soal as $data)
              <tr>
                  <td style="width:10%">{{ $data->id_soal}}</td>
                  <td style="width:50%">{!!$data->soal!!}</td>
                  <td style="width:20%">{{ $data->jawaban}}</td>
                  <td>
                    <a href="soal-tpa/{{$data->id_soal}}/edit"><button type="button" name="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                    <button type="button" class="btn btn-danger" data-id="{{$data->id_soal}}"  data-toggle="modal" data-target="#modal-delete">
                      Hapus
                    </button>
                  </td>

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

    <div class="modal fade" id="modal-delete" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Setting</h4>
          </div>
          <div class="modal-body">
             Apakah Anda Ingin Menghapusnya ?
          </div>
          <div class="modal-footer">
            <form class="" id="delform" action="" method="post" >
              @method('post')
              @csrf
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Ya</button>

          </form>
          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    </form>


  @Endsection

  @section('js')
    <script type="text/javascript">
      $(document).ready(function(){

        var stslogin = "{{session()->get('stslogin')}}";

        if (stslogin == 1) {
          Swal.fire(

          'Konfirmasi',
          'Simpan Berhasil',
          'success'
            )
        }

      });
    </script>
    <script type="text/javascript">

    $('#modal-delete').on('show.bs.modal',function(event) {
      var button = $(event.relatedTarget);
      var id = button.data("id");
      var tanggal = button.data("tanggal");
      var waktu = button.data("waktu");
      var kategori = button.data("kategori");

      var modal = $(this);

      $('#delform').attr('action', "{{url('/admin/soal-tpa/delete')}}" + "/"+ id);
    });
    </script>

  @endsection
