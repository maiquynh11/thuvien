@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thông tin độc giả: {{$book->tensach}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('books.index')}}">Độc giả</a> </li>
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
              {!! Form::model($docgias, ['method' => 'PATCH','route' => ['docgias.update', $docgia->id], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleMa">Mã học sinh</label>
                    <input type="text" class="form-control" id="masach" placeholder="Mã Sách" name="masach" value="{{$book->masach}}">
                  </div>
                 <div class="form-group">
                    <label for="exampleName">Tên học sinh</label>
                    <input type="text" class="form-control" id="tensach" placeholder="Tên Sách" name="tensach" value="{{$book->tensach}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleTacgia">Giới tính</label>
                    <input type="text" class="form-control" id="exampleInputTacgia" placeholder="Tác giả" name="tacgia" value="{{$book->tacgia}}">
                  </div>
                  <label for="exampleDanhso">Ngày sinh</label>
                  <input type="text" class="form-control" id="nhaxuatban" placeholder="Nhập Nhà Bản" name="nhaxuatban" value="{{$book->nhaxuatban}}">
                </div>
                <div class="form-group">
                  <label for="exampleNgaysinh">Mã lớp</label>
                  <input type="text" class="form-control" id="nagysinh" placeholder="Enter ngày sinh" name="ngaysinh" value="{{$book->namxuatban}}">
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
    </section>

@endsection
