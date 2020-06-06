@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÔNG TIN ĐẦU SÁCH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('dausachs.index')}}">Đầu sách</a> </li>
              <li class="breadcrumb-item active">Thông tin đầu sách {{$dausach->tensach}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Mã sách:</strong>
                        {{ $dausach->masach }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tên sách:</strong>
                        {{ $dausach->tensach }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tác giả:</strong>
                        {{ $dausach->tacgia }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nhà xuất bản:</strong>
                        {{ $dausach->nhaxuatban}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Năm xuất bản:</strong>
                        {{$dausach->namxuatban}}"
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Số lượng:</strong>
                      {{ $dausach->soluong }}
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Ngôn ngữ:</strong>
                      {{$dausach->ngonngu}}"
                  </div>
              </div>                   
              <!-- form start -->
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
