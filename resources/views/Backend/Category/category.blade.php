@extends('Backend.Master.master')
@section('active-category')
    class="active"
@endsection
@section('category')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh mục</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục</h1>
        </div>
    </div>


     <!-- Laravel scout + agolia -->
     <div class="aa-input-container" style="margin-bottom: 10px;" id="aa-input-container">
        <form method="get">
            <input style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
            font-size: 14px; padding: 8px; width:410px;" type="search" id="aa-search-input" class="aa-input-search"
                placeholder="Nhập từ khóa tìm kiếm..." name="search" autocomplete="off" />
                <svg class="aa-input-icon"
                viewBox="654 -372 1664 1664">
                <path
                    d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
            </svg>    
        </form>
    </div>

    <!-- /Laravel scout + agolia -->
    <!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">

                            <form action="" method="post">
                            <div class="form-group">
                                <label for="">Danh mục cha:</label>
                                <select class="form-control" name="parent" id="">
                                    <option value="0">Chọn danh mục</option>
                                    {{ menuCategory($category,0,"") }}
                                </select>
                            </div>                            
                            <div class="form-group">
                                <label for="">Tên Danh mục</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                               
                                <div class="alert bg-danger" role="alert">
                                    <svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg>{{ $errors->first('name') }}<a href="" class="close" data-dismiss="alert" ><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                     
                                @endif
                            </div>
                           <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                           @csrf
                            </form>

                        </div>
                        <div class="col-md-7">
                            @if (session('key'))
                                <div class="alert bg-{{ session('key') }}" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg> {{ session('content') }} <a href="" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove"></span></a>
                            </div> 
                            @endif
                           
                            <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                            <div class="vertical-menu">
                                <div class="item-menu active">Danh mục </div>
                                {{ showCategory($category,0,"") }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->


    </div>
    <!--/.row-->
</div>

 <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
         <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="js/category_search.js"></script>
@endsection
