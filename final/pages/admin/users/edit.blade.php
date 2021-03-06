@extends('admin.layout.index')
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h4>User</h4>
                    <span>Create</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">User</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Edit user</h5>
                        </div>
                        <div class="card-block">
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $arr)
                                {{$arr}}<br>
                                @endforeach

                            </div>
                            @endif
                            @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                            @endif
                        <form action="admin/user/edit/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="{{$user->name}}" placeholder="Nh???p t??n ng?????i d??ng" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" value="{{$user->email}}"  name="email" placeholder="Nh???p ?????a ch??? email" />
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" type="text" name="username" value="{{$user->username}}"  placeholder="Nh???p ?????a ch??? email" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="checkChangpassword" name="changepassword">
                                <label>?????i m???t kh???u</label>
                                <input type="password" class="password form-control" name="password" disabled placeholder="Nh???p m???t kh???u" />
                            </div>
                        
                            <div class="form-group">
                                <label>Retype Password</label>
                                <input type="password" class="password form-control" name="passwordagain" disabled placeholder="Nh???p l???i m???t kh???u" />
                            </div>
                            Retype Password
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#checkChangpassword').change(function(){
            if($(this).is(":checked"))
            {
                $('.password').removeAttr('disabled');
            }
            else 
                {
                 $('.password').attr('disabled','');
                 }
            });
        });
    </script>
@endsection