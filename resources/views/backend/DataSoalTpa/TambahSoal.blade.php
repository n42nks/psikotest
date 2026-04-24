@extends('backend/dashboard')
  <!-- Content Wrapper. Contains page content -->
@section('content')
  <!-- ckeditor -->
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
 
<br>

<div class="container-fluid">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Soal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('tambahsoal')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">ID Soal</label>
                    <div class="row">
                      <div class="col-sm-1">
                         <input type="text" readonly=""  class="form-control" id="id_soal" name="id_soal" value="@foreach($Soal as $data){{$data->id_soal+1}}@endforeach" >
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option>Pilih Kategori</option>
                      @foreach($kategori as $data1)
                      <option value="{{$data1->id_kategori}}">{{$data1->kategori}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                   <label>Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    <script>
                        // CKEDITOR.replace( 'soal' );
                        CKEDITOR.replace('soal', {
                            filebrowserBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=files') }}",
                            filebrowserImageBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=images') }}",
                            filebrowserFlashBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=flash') }}",
                            filebrowserUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=files') }}",
                            filebrowserImageUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=images') }}",
                            filebrowserFlashUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=flash') }}"
                        });
                    </script>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban A</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea style="width: 50%;" type="text" class="form-control" id="A" name="A"></textarea>
                        <script>                        
                        CKEDITOR.replace('A', {
                            filebrowserBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=files') }}",
                            filebrowserImageBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=images') }}",
                            filebrowserFlashBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=flash') }}",
                            filebrowserUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=files') }}",
                            filebrowserImageUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=images') }}",
                            filebrowserFlashUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=flash') }}"
                        });
                        </script>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban B</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="B" name="B"></textarea>
                        <script>                        
                        CKEDITOR.replace('B', {
                            filebrowserBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=files') }}",
                            filebrowserImageBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=images') }}",
                            filebrowserFlashBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=flash') }}",
                            filebrowserUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=files') }}",
                            filebrowserImageUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=images') }}",
                            filebrowserFlashUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=flash') }}"
                        });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban C</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="C" name="C"></textarea>
                        <script>                        
                          CKEDITOR.replace('C', {
                            filebrowserBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=files') }}",
                            filebrowserImageBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=images') }}",
                            filebrowserFlashBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=flash') }}",
                            filebrowserUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=files') }}",
                            filebrowserImageUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=images') }}",
                            filebrowserFlashUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=flash') }}"
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban D</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="D" name="D"></textarea>
                        <script>                        
                          CKEDITOR.replace('D', {
                            filebrowserBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=files') }}",
                            filebrowserImageBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=images') }}",
                            filebrowserFlashBrowseUrl: "{{ asset('ckeditor/kcfinder/browse.php?type=flash') }}",
                            filebrowserUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=files') }}",
                            filebrowserImageUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=images') }}",
                            filebrowserFlashUploadUrl: "{{ asset('ckeditor/kcfinder/upload.php?type=flash') }}"
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kunci Jawaban</label>

                    <div class="row">
                      <div class="col-sm-2">
                          <input type="text" class="form-control" id="jawaban" name="jawaban">
                      </div>
                    </div>
                  </div>
             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
@Endsection
