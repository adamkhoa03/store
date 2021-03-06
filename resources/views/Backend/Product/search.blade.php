@extends('Backend.Master.master')
@section('active-product')
    class="active"
@endsection
@section('product')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Kết quả tìm kiếm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kết quả tìm kiếm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                          
                            <a href="{{ route('product.add') }}" class="btn btn-primary">Thêm sản phẩm</a>
                           @if ($count>0)
                           <table class="table table-bordered" style="margin-top:20px;">

                            <!-- Laravel scout + agolia -->
                            <div style="float: right" class="aa-input-container" id="aa-input-container">
                                <form method="get" action="{{ route('search_submit') }}">
                                    <input style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
                                    font-size: 14px; padding: 8px;" type="search" id="aa-search-input" class="aa-input-search" required
                                        placeholder="Nhập từ khóa tìm kiếm..." name="search" autocomplete="off" />
                                </form>
                            </div>

                            <!-- /Laravel scout + agolia -->
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Thông tin sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Tình trạng</th>
                                    <th>Danh mục</th>
                                    <th width='18%'>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                
                          
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-3"><img src="{{ $item->prd_img }}" alt="Áo đẹp" width="100px" class="thumbnail"></div>
                                            <div class="col-md-9">
                                                <p><strong>Mã sản phẩm : {{ $item->prd_code }}</strong></p>
                                                <p>Tên sản phẩm : {{ $item->prd_name }}</p>
                                                
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ formatPrice($item->prd_price) }} VND</td>
                                    <td>
                                       {!! $item->prd_status == 1 ?
                                       '<p class="btn btn-success">Còn hàng</p>'
                                       :
                                       '<p class="btn btn-danger">Hết hàng</p>'
                                       !!}
                                    </td>
                                    <td>{{$item->category->name}}</td>
                                    <td>
                                        <a href="{{ route('product.edit',['id'=>$item->id]) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                        <a onclick="return confirm('Xác nhận xóa sản phẩm: {{ $item->prd_name }}')" href="{{ route('product.delete',['id'=>$item->id]) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                           @else
                                 <!-- Laravel scout + agolia -->
                            <div style="float: right" class="aa-input-container" id="aa-input-container">
                                <form method="get" action="{{ route('search_submit') }}">
                                    <input type="search" id="aa-search-input" class="aa-input-search"
                                        placeholder="Nhập từ khóa tìm kiếm" name="search" autocomplete="off" />
                                </form>
                            </div>

                            <!-- /Laravel scout + agolia -->
                        <div style="margin-top: 20px;" class="alert alert-danger">Không có kết quả tìm kiếm với từ khóa "{{$keyword}}"</div>
                           @endif
                           
                            <div align='right'>
                               {{$product->links()}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <!--/.row-->


        </div>
@endsection