@extends('Backend.Master.master')
@section('profile')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin thành viên</h1>
        </div>
    </div>
    <!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Thông tin thành viên "{{ $profile->full }}"</div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" disabled class="form-control" value="{{ $profile -> email }}">
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="fullname" disabled class="form-control" value="{{ $profile -> full }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" disabled class="form-control" value="{{ $profile -> address }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" disabled class="form-control" value="{{ $profile -> phone }}">
                                </div>        
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control" disabled>
                                        <option @if($profile-> user_level === 1)  selected  @endif value="1">admin</option>
                                        <option @if($profile-> user_level === 2)  selected  @endif value="2">user</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                    @if($profile -> avatar == null)
                                        <img id="avatar" class="thumbnail" width="50%" height="250px" src="avatar/avatar0.png">
                                    @else
                                <img id="avatar" class="thumbnail" width="50%" height="250px" src="{{$profile->avatar}}">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" style="width: 168px"  type="submit">Cập nhật Avatar</button>
                                <a href="{{route('profile')}}" class="btn btn-danger" type="button">Huỷ bỏ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>

    </div>
</div>

    <!--/.row-->
</div>

<!--end main-->
@endsection