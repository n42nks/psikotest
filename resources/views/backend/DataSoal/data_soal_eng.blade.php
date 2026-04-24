@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/soal','active')
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
              <h2>Data Soal Reading</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/reading/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{-- soal reading --}}
              <table id="ex1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">cerita</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($reading as $soal)
                  <td>{{$no}}</td>
                  <td>{{$soal->soal}}</td>
                  <td>{{$soal->opsiA}}</td>
                  <td>{{$soal->opsiB}}</td>
                  <td>{{$soal->opsiC}}</td>
                  <td>{{$soal->opsiD}}</td>
                  <td>{{$soal->key}}</td>
                  <td>{{$soal->id_cerita}}</td>
                  <td>{{$soal->id_petunjuk}}</td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/reading/show/{{$soal->id_soal}}">Edit</a>
                    <a data-id="reading/{{$soal->id_soal}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
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

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Write Ekspresion</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/we/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{-- soal reading --}}
              <table id="ex2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($write_ekspresion as $soal)
                  <td>{{$no}}</td>
                  <td>{{$soal->soal}}</td>
                  <td>{{$soal->opsiA}}</td>
                  <td>{{$soal->opsiB}}</td>
                  <td>{{$soal->opsiC}}</td>
                  <td>{{$soal->opsiD}}</td>
                  <td>{{$soal->key}}</td>
                  <td>{{$soal->id_petunjuk}}</td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/we/show/{{$soal->id_soal}}">Edit</a>
                    <a data-id="we/{{$soal->id_soal}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
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

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Vocabulary</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/vocabulary/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{-- soal reading --}}
              <table id="ex3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($vocabulary as $soal)
                  <td>{{$no}}</td>
                  <td>{{$soal->soal}}</td>
                  <td>{{$soal->opsiA}}</td>
                  <td>{{$soal->opsiB}}</td>
                  <td>{{$soal->opsiC}}</td>
                  <td>{{$soal->opsiD}}</td>
                  <td>{{$soal->key}}</td>
                  <td>{{$soal->id_petunjuk}}</td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/vocabulary/show/{{$soal->id_soal}}">Edit</a>
                    <a data-id="vocabulary/{{$soal->id_soal}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
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

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2>Data Soal Listening</h2>
              <a rel="tooltip" title="Tambah"  type="button" class="btn btn-primary" href="eng/listening/show">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {{-- soal reading --}}
              <table id="ex4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%" style="text-align: center;">Soal</th>
                  <th width="20%" style="text-align: center;">A</th>
                  <th width="20%" style="text-align: center;">B</th>
                  <th width="20%" style="text-align: center;">C</th>
                  <th width="20%" style="text-align: center;">D</th>
                  <th width="20%" style="text-align: center;">key</th>
                  <th width="20%" style="text-align: center;">sound</th>
                  <th width="20%" style="text-align: center;">petunjuk</th>
                  <th width="15%" style="text-align: center;">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($listening as $soal)
                  <td>{{$no}}</td>
                  <td>{{$soal->soal}}</td>
                  <td>{{$soal->opsiA}}</td>
                  <td>{{$soal->opsiB}}</td>
                  <td>{{$soal->opsiC}}</td>
                  <td>{{$soal->opsiD}}</td>
                  <td>{{$soal->key}}</td>
                  <td>{{$soal->id_sound}}</td>
                  <td>{{$soal->id_petunjuk}}</td>
                  <td style="text-align:center;">
                    <a rel="tooltip" title="Edit"  type="button" class="btn btn-warning btn-sm" href="eng/listening/show/{{$soal->id_soal}}">Edit</a>
                    <a data-id="listening/{{$soal->id_soal}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-sm del">Hapus</a>
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
                          <h4 class="modal-title">Konfirmasi Hapus Data Soal</h4>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="soal/delete" method="POST">
                            <div class="col">
                              <label for="text">Apakah ingin menghapus soal</label>
                            </div>
                            <div class="modal-footer">
                              <a id="del" href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                            </form>       
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
      $('#ex2').DataTable()
      $('#ex3').DataTable()
      $('#ex4').DataTable()
      $(document).on("click", ".btn.btn-danger.btn-sm.del", function () {
        var id = $(this).data('id');
        $("#del").attr("href", 'eng/' + id + '/delete')
      });
    </script>
@endsection