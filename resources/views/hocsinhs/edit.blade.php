@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thông tin độc giả: {{$hocsinhs->tenhocsinh}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('hocsinhs.index')}}">Độc giả</a> </li>
              <li class="breadcrumb-item active">Sửa độc giả</li>
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
                  <!-- form start -->
                  {!! Form::model($hocsinhs, ['method' => 'PATCH','route' => ['hocsinhs.update', $hocsinhs->id], 'files'=>true]) !!}
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleMa">Mã học sinh</label>
                        <input type="text" class="form-control" id="mahocsinh" placeholder="Mã học sinh" name="mahocsinh" value="{{$hocsinhs->mahocsinh}}">
                      </div>
                    <div class="form-group">
                        <label for="exampleName">Tên học sinh</label>
                        <input type="text" class="form-control" id="tenhocsinh" placeholder="Tên học sinh" name="tenhocsinh" value="{{$hocsinhs->tenhocsinh}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleTacgia">Giới tính</label>
                        <input type="text" class="form-control" id="giới tính" placeholder="Giới tính" name="gioitinh" value="{{$hocsinhs->gioitinh}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleDanhso">Ngày sinh</label>
                        <input type="text" class="form-control" id="ngaysinh" placeholder="Ngày sinh" name="ngaysinh" value="{{$hocsinhs->ngaysinh}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Tên lớp</label>
                          <select name="malop" class="browser-default custom-select">
                            @foreach ($lops as $lop)
                              <option value="{{$lop->malop}}"> {{$lop->tenlop}}</option>
                            @endforeach
                          </select>
                      </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  {!! Form::close()!!}
                </div>
                <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
