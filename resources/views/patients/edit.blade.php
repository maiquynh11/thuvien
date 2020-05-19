@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User: {{$patient->name}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('patients.index')}}">User</a> </li>
              <li class="breadcrumb-item active">Edit User </li>
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
              {!! Form::model($user, ['method' => 'PATCH','route' => ['patients.update', $user->id], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Patient Name</label>
                    <input type="text" class="form-control" id="pname" placeholder="patient name" name="pname" value="{{$patient->pname}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="pemail" value="{{$patient->pemail}}">
                  </div>

                  <label for="exampleDanhso">Phone number</label>
                  <input type="text" class="form-control" id="phonenumber" placeholder="Enter phone number" name="phonenumber" value="{{$patient->phonenumber}}">
                </div>
                <div class="form-group">
                  <label for="exampleNgaysinh">Ngày sinh</label>
                  <input type="text" class="form-control" id="nagysinh" placeholder="Enter ngày sinh" name="ngaysinh" value="{{$patient->ngaysinh}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputGioitinh">Giới tính</label>
                  <input type="email" class="form-control" id="gioitinh" placeholder="Enter giới tính" name="gioitinh" value="{{$patient->gioitinh}}">
                </div>
                <div class="form-group">
                  <label for="exampleNgaykham">Ngày khám</label>
                  <input type="text" class="form-control" id="ngaykham" placeholder="Enter ngày khám" name="ngaykham" value="{{$patient->ngaykham}}">
                </div>
                <div class="form-group">
                  <label for="exampleKhunggio">Khung giờ</label>
                  <input type="text" class="form-control" id="khunggio" placeholder="khung giờ" name="khunggio" value="{{$patient->khunggio}}">
                </div>
                  <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
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
