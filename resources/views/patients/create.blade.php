@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Patient Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('patients.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('patients.index')}}">User</a> </li>
              <li class="breadcrumb-item active">Create User Form</li>
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
              <form role="form" action="{{route('patients.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Patient Name</label>
                    <input type="text" class="form-control" id="pname" placeholder="Enter patient name" name="pname" value="{{old('pname')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="pemail" value="{{old('pemail')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Phone number</label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="Enter phone number" name="phonenumber" value="{{old('phonenumber')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaysinh">Ngày sinh</label>
                    <input type="text" class="form-control" id="nagysinh" placeholder="Enter ngày sinh" name="ngaysinh" value="{{old('ngaysinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGioitinh">Giới tính</label>
                    <input type="email" class="form-control" id="gioitinh" placeholder="Enter giới tính" name="gioitinh" value="{{old('gioitinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaykham">Ngày khám</label>
                    <input type="text" class="form-control" id="ngaykham" placeholder="Enter ngày khám" name="ngaykham" value="{{old('ngaykham')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleKhunggio">Khung giờ</label>
                    <input type="text" class="form-control" id="khunggio" placeholder="khung giờ" name="khunggio" value="{{old('khunggio')}}">
                  </div>
                  <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
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
