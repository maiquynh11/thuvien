@extends('pages.layout.layouts')

@section('content')
<div class="container p-2 style="background">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h4>DANH SÁCH CÁC QUYỀN</h4>
            </div>
        </div>
        <div class="col-lg-6 margin-tb">
            <div class="pull-right float-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                <br>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label d-block"><li>{{ $v->name}}</li></label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
