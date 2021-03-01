@extends('Backend.Master.master')
@section('editproduct')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm "{{ $product->prd_name }}"</div>
                <div class="panel-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="margin-bottom:40px">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category" class="form-control">
                                        {{ menuCategory($category,0,"") }}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" name="code" class="form-control"
                                        value="{{ $product->prd_code }}">
                                </div>
                                {{ showErrors($errors,'code') }}
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $product->prd_name }}">
                                </div>
                                {{ showErrors($errors,'name') }}
                                <div class="form-group">
                                    <label>Giá sản phẩm (Giá chung)</label>
                                    <input type="number" name="price" class="form-control"
                                        value="{{ $product->prd_price }}">
                                </div>
                                {{ showErrors($errors,'price') }}
                                <div class="form-group">
                                    <label>Sản phẩm có nổi bật</label>
                                    <select name="featured" class="form-control">
                                        @if ($product->prd_featured == 1)
                                        <option selected value="1">Có</option>
                                        @else
                                        <option value="1">Có</option>
                                        @endif
                                        @if ($product->prd_featured == 0)
                                        <option selected value="0">Không</option>
                                        @else
                                        <option value="0">Không</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        @if ($product->prd_status == 1)
                                        <option selected value="1">Còn hàng</option>
                                        @else
                                        <option value="1">Còn hàng</option>
                                        @endif
                                        @if ($product->prd_status == 0)
                                        <option selected value="0">Hết hàng</option>
                                        @else
                                        <option value="0">Hết hàng</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input accept="image/jpg, image/png, image/bmp, image/jpeg, image/gif"
                                        onchange="loadFile (event)" name="img" id="input" type="file"
                                        style="display: none;">
                                    <label for="input"> <img style="cursor: pointer" id="output" class="thumbnail"
                                            width="100%" height="350px" src="{{ $product->prd_img }}"></label>
                                </div>
                                {{ showErrors($errors,'img') }}
                                @if (session('alert'))
                                <div class="alert alert-danger">
                                    <div><strong>{{ session('alert') }}</strong></div>
                                </div>
                                @endif
                                <label class="btn btn-primary" for="input" style="cursor: pointer;">Click để chọn
                                    ảnh</label>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin</label>
                                    <textarea name="info"
                                        style="width: 100%;height: 100px;">{{ $product->prd_properties }}</textarea>
                                </div>
                                {{ showErrors($errors,'info') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor" name="describe"
                                        style="width: 100%;height: 100px;">{{ $product->prd_details }}</textarea>
                                </div>
                                {{ showErrors($errors,'describe') }}
                                <button class="btn btn-success" type="submit">Sửa sản phẩm</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
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

@endsection