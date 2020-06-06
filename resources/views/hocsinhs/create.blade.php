@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tạo độc giả</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('books.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('books.index')}}">Độc giả</a> </li>
              <li class="breadcrumb-item active">Create</li>
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
              <form role="form" action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Mã học sinh</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter book name" name="name" value="{{old('name')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên học sinh</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{old('email')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Giới tính</label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="Enter phone number" name="phonenumber" value="{{old('phonenumber')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="ngaysinh" placeholder="Enter ngày sinh" name="ngaysinh" value="{{old('ngaysinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGioitinh">Mã lớp</label>
                    <input type="text" class="form-control" id="gioitinh" placeholder="Enter giới tính" name="gioitinh" value="{{old('gioitinh')}}">
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
