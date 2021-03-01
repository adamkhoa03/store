@extends('Backend.Master.master')
@section('active-product')
class="active"
@endsection
@section('addproduct')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Thêm sản phẩm</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" action="" method="post">
                        <div class="row" style="margin-bottom:40px">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category" class="form-control">
                                        {{ menuCategory($category, 0, '') }}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                                </div>
                                {{ showErrors($errors, 'code') }}
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                                {{ showErrors($errors, 'name') }}
                                <div class="form-group">
                                    <label>Giá sản phẩm (Giá chung)</label>
                                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                                </div>
                                {{ showErrors($errors, 'price') }}
                                <div class="form-group">
                                    <label>Sản phẩm có nổi bật</label>
                                    <select name="featured" class="form-control">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group text-center">
                                    <label>Ảnh sản phẩm</label>
                                    <input accept="image/bmp, image/jpg, image/jpeg, image/png, image/gif" id="input" type="file" name="img" class="form-control hidden"
                                        onchange="loadFile(event)" >
                                    <label style="cursor: pointer" for="input"><img id="output" style="cursor: pointer;"
                                            class="thumbnail" width="100%" height="350px"
                                            src="img/import-img.png">
                                    </label>
                                    <label for="input" style="cursor: pointer">Click để tải ảnh lên</label><br/>
                                    <span style="color: green; font-style:italic;">(Hỗ trợ định dạng ảnh .jpg .jpeg .png .bmp)</span>
                                </div>
                                {{ showErrors($errors,'img') }}
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin</label>
                                    <textarea name="info"
                                        style="width: 100%;height: 100px;">{{ old('info') }}</textarea>
                                </div>
                                {{ showErrors($errors,'info') }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor" name="describe"
                                        style="width: 100%;height: 100px;">{{ old('describe') }}</textarea>
                                </div>
                                {{ showErrors($errors,'describe') }}
                                <button class="btn btn-success" name="add-product" type="submit">Thêm sản phẩm</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--/.row-->
</div>
<script> 
    var loadFile = function (event) { 
        var image = document.getElementById ('output'); 
        image.src = URL.createObjectURL (event.target.files [0]); 
    } 
    </script>
@endsection