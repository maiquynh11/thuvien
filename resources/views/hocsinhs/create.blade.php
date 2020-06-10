@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÊM ĐỘC GIẢ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('hocsinhs.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('hocsinhs.index')}}">Độc giả</a> </li>
              <li class="breadcrumb-item active">Thêm</li>
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
    <section class="content"   style="background-color:#dcedc8">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary"  style="background-color:#e8f5e9">
              <div class="card-header">
                <div class="card-title"> 
                  <strong>INFORMATION</strong>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('hocsinhs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Mã học sinh</label>
                    <input type="text" class="form-control" id="mahocsinh" placeholder="Mã học sinh" name="mahocsinh" value="{{old('mahocsinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên học sinh</label>
                    <input type="text" class="form-control" id="tenhocsinh" placeholder="Tên học sinh" name="tenhocsinh" value="{{old('tenhocsinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Giới tính</label>
                    <input type="text" class="form-control" id="gioitinh" placeholder="Giới tính" name="gioitinh" value="{{old('gioitinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="ngaysinh" placeholder="Ngày sinh" name="ngaysinh" value="{{old('ngaysinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên lớp</label>
                    <select name="malop" class="browser-default custom-select">
                      @foreach ($lops as $value)
                        <option value="{{$value->malop}}"> {{$value->tenlop}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
