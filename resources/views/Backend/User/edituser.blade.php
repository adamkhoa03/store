@extends('Backend.Master.master')
@section('active-user')
    class="active"
@endsection
@section('edituser')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{ $users->full }} </div>
                <div class="panel-body">
                    <div class="row justify-content-center" style="margin-bottom:40px">
                        <form action="" method="post">
                        <div class="col-md-8 col-lg-8 col-lg-offset-2">
                         
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $users->email }}">
                            {{ showErrors($errors,'email') }}
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control" value="" placeholder="Nhập lại mật khẩu">
                            </div>
                            {{ showErrors($errors,'password') }}
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="full" name="full" class="form-control" value="{{ $users->full }}">
                            </div>
                            {{ showErrors($errors,'full') }}
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="address" name="address" class="form-control" value="{{ $users->address }}">
                            </div>
                            {{ showErrors($errors,'address') }}
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="phone" name="phone" class="form-control" value="{{ $users->phone }}">
                            </div>
                            {{ showErrors($errors,'phone') }}
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    @if ($users->level == 1)
                                    <option selected value="1">Admin</option>
                                    @else
                                    <option value="1">Admin</option>
                                    @endif
                                    @if ($users->level == 2)
                                    <option selected value="2">User</option>
                                    @else
                                    <option value="2">User</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                              
                                <button class="btn btn-success"  type="submit">Sửa thành viên</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                       @csrf
                    </form>
                    </div>
                
                    <div class="clearfix"></div>
                </div>
            </div>

    </div>
</div>

    <!--/.row-->
</div>
@endsection