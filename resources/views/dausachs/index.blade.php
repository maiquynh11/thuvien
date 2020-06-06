@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8" >
            <h1>BẢNG ĐẦU SÁCH</h1>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-success" href="{{ route('dausachs.create') }}">Tạo đầu sách</a>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dausachs.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Bảng đầu sách</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;" style="background-color:#e0e0e0">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit" style="background-color:#e0e0e0">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead  style="background-color:#b4a647">
                    <tr>
                      <th>ID</th>
                      <th>Mã Sách</th>
                      <th>Tên Sách</th>
                      <th>Tác Giả</th>
                      <th>Nhà Xuất Bản</th>
                      <th>Năm Xuất Bản</th>
                      <th>Số Lượng</th>
                      <th>Ngôn Ngữ</th>
                      
                      <th>Thao Tác</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($dausachs as $dausach)
                    <tr>
                      <td>{{$dausach->id}}</td>
                      <td>{{$dausach->masach}}</td>
                      <td>{{$dausach->tensach}}</td>
                      <td>{{$dausach->tacgia}}</td>
                      <td>{{$dausach->loaisach->tenloai}}</td>
                      <td>{{$dausach->nhaxuatban}}</td>
                      <td>{{$dausach->namxuatban}}</td>
                      <td>{{$dausach->soluong}}</td>
                      <td>{{$dausach->ngonngu}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('dausachs.show',$dausach->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('dausachs.edit',$dausach->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['dausachs.destroy', $dausach->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $dausachs->links()!!}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

@endsection
