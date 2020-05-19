@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User: {{$user->name}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('users.index')}}">User</a> </li>
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
            <div class="card card-primary" style="background-color:#e8f5e9">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{$user->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$user->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirmPassword" name="confirm-password">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Danh số</label>
                    <input type="text" class="form-control" id="danhso" placeholder="" name="danhso" value="{{$user->danhso}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleTen">Họ tên</label>
                    <input type="text" class="form-control" id="hoten" placeholder="" name="hoten" value="{{$user->hoten}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Input avatar</label>
                        <input type="file" class="form-control" name="avatar" >
                      
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
