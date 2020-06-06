@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SỬA LOẠI SÁCH{{$loaisach->tensach}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="{{route('loaisachs.index')}}">Loại sách</a> </li>
              <li class="breadcrumb-item active">Sửa loại sách</li>
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
              {!! Form::model($loaisach, ['method' => 'PATCH','route' => ['loaisachs.update', $loaisach->id], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleMa">Mã loại</label>
                    <input type="text" class="form-control" id="maloai" placeholder="Mã loại" name="maloai" value="{{$loaisach->maloai}}">
                  </div>
                 <div class="form-group">
                    <label for="exampleName">Tên loại</label>
                    <input type="text" class="form-control" id="tenloai" placeholder="Tên loại" name="tenloai" value="{{$loaisach->tenloai}}">
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
