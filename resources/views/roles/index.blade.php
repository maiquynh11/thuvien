@extends('pages.layout.layouts')

@section('content')
<div class="row" style="background-color:#dcedc8">
        <div class="col-sm-8 mt-1" >
            <h2>Quyền</h2>
        </div>
        {{-- <div class="pull-right"> --}}
        <div class="col-sm-4 mt-1">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}">Thêm quyền</a>
            @endcan
        </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">    
        <button type="button" class="close" data-dismiss="alert">x</button>

        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
        </td>
    </tr>
    @endforeach
</table>


@endsection
