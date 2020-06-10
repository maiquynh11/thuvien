@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SỬA THÔNG TIN LỚP: {{$lops->malop}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('lops.index')}}">Lớp</a> </li>
              <li class="breadcrumb-item active">Sửa thông tin lớp </li>
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
            <div class="card card-primary" style="background-color:#e8f5e9">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::model($lops, ['method' => 'PATCH','route' => ['lops.update', $lops->id], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Mã lớp</label>
                    <input type="text" class="form-control" id="malop" placeholder="Mã lớp" name="malop" value="{{$lops->malop}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên lớp</label>
                    <input type="text" class="form-control" id="tenlop" placeholder="Tên lớp" name="tenlop" value="{{$lops->tenlop}}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
              {!! Form::close()!!}
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
