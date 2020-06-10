@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÔNG TIN LỚP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('lops.index')}}">Lớp</a> </li>
              <li class="breadcrumb-item active">Thông tin lớp {{$lops->tenlop}}</li>
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
                        <strong>Mã lớp:</strong>
                        {{ $lops->malop}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tên lớp:</strong>
                        {{ $lops->tenlop }}
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
