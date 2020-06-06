@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TẠO ĐẦU SÁCH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dausachs.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('dausachs.index')}}">Đầu sách</a> </li>
              <li class="breadcrumb-item active">Tạo đầu sách</li>
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
    <section class="content" style="background-color:#dcedc8">
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
              <form role="form" action="{{route('dausachs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Mã đầu sách</label>
                    <input type="text" class="form-control" id="masach" placeholder="Mã sách" name="masach" value="{{old('masach')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên đầu sách</label>
                    <input type="text" class="form-control" id="tensach" placeholder="Tên sách" name="tensach" value="{{old('tensach')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Tác giả</label>
                    <input type="text" class="form-control" id="tacgia" placeholder="Tác giả" name="tacgia" value="{{old('tacgia')}}">
                  </div>
                  <div class="form-group">
                    <strong>Mã loại</strong>
                    <select name="maloai" class="browser-default custom-select">
                      @foreach ($loaisach as $value)
                        <option value="{{$value->maloai}}"> {{$value->tenloai}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnhaxuatban">Nhà xuất bản</label>
                    <input type="text" class="form-control" id="nhaxuatban" placeholder="Nhà xuất bản" name="nhaxuatban" value="{{old('nhaxuatban')}}">
                  </div>
                  <div class="form-group">
                    <label for="examplenamxuatban">Năm xuất bản</label>
                    <input type="text" class="form-control" id="namxuatban" placeholder="Năm xuất bản" name="namxuatban" value="{{old('namxuatban')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleKhunggio">Số lượng</label>
                    <input type="text" class="form-control" id="soluong" placeholder="Số lượng" name="soluong" value="{{old('soluong')}}">
                  </div>
                  <div class="form-group">
                    <label for="example">Ngôn ngữ</label>
                    <input type="text" class="form-control" id="ngonngu" placeholder="Ngôn ngữ" name="ngonngu" value="{{old('ngonngu')}}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
