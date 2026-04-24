@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/cerita','active')
@section('eng/soal/display','')
@section('datasoaleng','active')
@section('header') 
<h1>Input Data Soal Bhs Inggris</h1>
<br>

@endsection
@section('content')

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Cerita</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{-- soal reading --}}
              <table id="ex1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  {{-- <th width="5%">No.</th> --}}
                  <th width="5%" style="text-align: center;">ID</th>
                  <th width="auto" style="text-align: center;">Cerita</th>
                  <th width="20%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($ceritas as $cerita)
                  {{-- <td>{{$no}}</td> --}}
                  <td>{{$cerita->id}}</td>
                  <td>{{$cerita->cerita}}</td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/show/{{$cerita->id}}">Edit</a>
                    <a data-id="{{$cerita->id}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
                  </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                </tbody>
              </table>
              <!-- The Modal Hapus-->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        
                        <div class="modal-header">          
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title">Konfirmasi Hapus Data Cerita</h4>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          {{-- <form action="soal/delete" method="POST"> --}}
                            <div class="col">
                              <label for="text">Apakah ingin menghapus Cerita</label>
                            </div>
                            <div class="modal-footer">
                              <a id="del" href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                            {{-- </form>        --}}
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

@endsection

@section('js')
    <script>
      $('#ex1').DataTable()
      $(document).on("click", ".btn.btn-danger.btn-sm.del", function () {
        var id = $(this).data('id');
        $("#del").attr("href", 'eng/cerita/' + id + '/delete')
      });
    </script>
@endsection