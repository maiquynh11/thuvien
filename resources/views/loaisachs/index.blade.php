@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8" >
            <h1>BẢNG LOẠI SÁCH</h1>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-success" href="{{ route('loaisachs.create') }}">Tạo loại sách</a>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('loaisachs.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Bảng loại sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row" style="background-color:#dcedc8">
      <div class="col-12">
        <!-- <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;" style="background-color:#e0e0e0">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit" style="background-color:#e0e0e0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div> -->
          <!-- /.card-header -->
        <div class="row">
         <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead  style="background-color:#b4a647">
                    <tr>
                      <th>ID</th>
                      <th>Mã loại</th>
                      <th>Tên loại</th>
                      <th>Thao Tác</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($loaisachs as $loaisach)
                    <tr>
                      <td>{{$loaisach->id}}</td>
                      <td>{{$loaisach->maloai}}</td>
                      <td>{{$loaisach->tenloai}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('loaisachs.show',$loaisach->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('loaisachs.edit',$loaisach->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['loaisachs.destroy', $loaisach->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $loaisachs->links()!!}
              </div>
            </div>
         </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

@endsection
