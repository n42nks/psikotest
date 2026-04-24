@extends('backend/dashboard')
  <!-- Content Wrapper. Contains page content -->
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<br>
<div class="container-fluid">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Soal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <form action="{{ route('updatesoal') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">ID Soal</label>
                    <div class="row">
                      <div class="col-sm-1">
                         <input type="hidden" name="id_soal" value="{{$Soal->id_soal}}">
                      </div>
                    </div>
                   
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select name="id_kategori[]" class="form-control">
                      <option>Pilih Kategori</option>
                      @foreach($kategori as $data1)
                      @if($Soal->id_kategori==$data1->id_kategori)
                      <option value="{{$data1->id_kategori}}" selected>{{$data1->kategori}}</option>
                      @else
                      <option value="{{$data1->id_kategori}}">{{$data1->kategori}}</option>
                      @endif
                      @endforeach
                    </select>
                  </div> 

                 <!--  <div class="form-group">
                   <label for="exampleInputEmail1">Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ...">{{$Soal->soal}}</textarea>
                  </div> -->

                  <div class="form-group">
                   <label>Soal</label>
                   <textarea type="text" class="form-control" id="soal" name="soal" class="form-control" rows="3" placeholder="Enter ...">{{$Soal->soal}}</textarea>
                    <script>
                        CKEDITOR.replace( 'soal' );
                    </script>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban A</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea style="width: 50%;" type="text" class="form-control" id="A" name="A">{{$Soal->A}}</textarea>
                        <script>
                        CKEDITOR.replace( 'A' );
                        </script>
                      </div>
                    </div>
                    
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban B</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="B" name="B">{{$Soal->B}}</textarea>
                        <script>
                        CKEDITOR.replace( 'B' );
                        </script>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban C</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="C" name="C">{{$Soal->C}}</textarea>
                        <script>
                        CKEDITOR.replace( 'C' );
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban D</label>
                    <div class="row">
                      <div class="col-sm-10">
                        <textarea  type="text" class="form-control" id="D" name="D">{{$Soal->D}}</textarea>
                        <script>
                        CKEDITOR.replace( 'D' );
                        </script>
                      </div>
                    </div>
                  </div>

              
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kunci Jawaban</label>
                  
                    <div class="row">
                      <div class="col-sm-2">
                          <input type="text" value="{{$Soal->jawaban}}" class="form-control" id="jawaban" name="jawaban">
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
