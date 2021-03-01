@extends('Backend.Master.master')
@section('active-user')
class="active"
@endsection
@section('edituser')
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
                <div class="panel-heading"><i class="fas fa-user"></i> Cập nhật thông tin thành viên
                    "{{ $users->full }}"</div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $users -> email }}">
                                </div>
                                {{ showErrors($errors,'email') }}
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="full" class="form-control" value="{{ $users -> full }}">
                                </div>
                                {{ showErrors($errors,'full') }}
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $users -> address }}">
                                </div>
                                {{ showErrors($errors,'address') }}
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $users -> phone }}">
                                </div>
                                {{ showErrors($errors,'phone') }}
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="password"
                                        placeholder="Nhập mật khẩu muốn thay đổi" name="password">
                                </div>
                                {{ showErrors($errors,'password') }}
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control">
                                        <option @if($users-> user_level === 1) selected @endif value="1">Admin</option>
                                        <option @if($users-> user_level === 2) selected @endif value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" style="width: 168px" type="submit">Cập nhật
                                        thành viên</button>
                                    <a href="{{route('user.index')}}" class="btn btn-danger" type="button">Huỷ bỏ</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 text-center">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input onchange = "loadFile (event)" name="avatar" id="img"  type="file"  style="display: none;">
                                    <label for="img">
                                        @if($users->avatar == null)
                                        <img style="cursor: pointer" id="output"  width="50%"
                                            src="avatar/avatar0.jpg">
                                        @else
                                        <img style="cursor: pointer" id="output"  width="50%"
                                            src="{{$users->avatar}}">
                                        @endif
                                    </label>
                                    <label class="btn btn-primary" style="margin-top: 20px" for="img" style="cursor: pointer">Chọn ảnh đại diện mới</label>
                                </div>
                                {{ showErrors($errors,'avatar') }}
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
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
    
<!--end main-->
@endsection