@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÔNG TIN ĐỘC GIẢ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('hocsinhs.index')}}">Độc giả</a> </li>
              <li class="breadcrumb-item active">Thông tin độc gỉa{{$hocsinhs->tensach}}</li>
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
                        <strong>Mã học sinh:</strong>
                        {{ $hocsinhs->mahocsinh}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tên học sinh:</strong>
                        {{ $hocsinhs->tenhocsinh}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Giới tính:</strong>
                        {{ $hocsinhs->gioitinh}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ngày sinh:</strong>
                        {{ $hocsinhs->ngaysinh }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tên lớp:</strong>
                        {{$hocsinhs->lop->tenlop}}
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
