@extends('backend/dashboard')
@section('menusoal','active')
@section('eng','active menu-open')
@section('eng/cerita','active')
@section('eng/soal/display','')
@section('datasoaleng','active')
@section('header') 
<h1>Tambah Data Cerita</h1>
<br>
@endsection
@section('content')
    <form id="form" action="{{url('admin/cerita/eng/save')}}" method="POST">
        {{csrf_field()}}
        @if($data->id != null)
          <input type="hidden" name="id" value="{{$data->id}}">
        @endif
        <br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Cerita
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              {{-- <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button> --}}
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
              <textarea class="textarea" placeholder="Place some text here" name="cerita" id="cerita"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$data->cerita}}</textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>  
@endsection
