<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\ProductEditRequest;
use App\Model\Admin\Category;
use App\Model\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function product()
    {
        $product = Product::paginate(3);
        return view('Backend.Product.product', compact('product'));
    }

    //Add
    public function getAdd()
    {
        $category = Category::all();
        return view('Backend.Product.addproduct', compact('category'));
    }
    public function postAdd(AddProductRequest $request)
    {
        $category = $request->category;
        $code = $request->code;
        $name = $request->name;
        $price = $request->price;
        $featured = $request->featured;
        $status = $request->status;
        $img_name = $request->img->getClientOriginalname();
        $img_url = 'img/products/' . $img_name;
        $request->img->move('public/backend/img/products', $img_name);
        $info = $request->info;
        $describe = $request->describe;
        $slug = Str::slug($request->name, '-');

        Product::create([
            'prd_code' => $code,
            'cat_name' => $category,
            'prd_name' => $name,
            'prd_price' => $price,
            'prd_featured' => $featured,
            'prd_status' => $status,
            'prd_img' => $img_url,
            'prd_properties' => $info,
            'prd_details' => $describe,
            'slug' => $slug
        ]);
        return redirect()->route('product.index')->with('alert', 'Thêm sản phẩm "' . $name . '" thành công')->with('key', 'success');
    }

    //Edit
    public function getEdit($id)
    {
        session(['id' => $id]);
        $product = Product::find($id);
        $category = Category::all();
        return view('Backend.Product.editproduct', compact('product', 'category'));
    }
    public function postEdit($id, ProductEditRequest $request)
    {
        $name = $request->name;
        $category = $request->category;
        $code = $request->code;
        $price = $request->price;
        $featured = $request->featured;
        $status = $request->status;
        $slug = Str::slug($request->name, '-');
        if ($request->has('img')) {
            if ($request->img->extension() == 'jpg' or $request->img->extension() == 'png' or $request->img->extension() == 'jpeg' or $request->img->extension() == 'bmp' or $request->img->extension() == 'gif') {
                $img_name = $request->img->getClientOriginalName();
                $img = 'img/products/' . $img_name;
                $request->img->move('public/backend/img/products', $img_name);
            } else {
                return redirect()->back()->with('alert', 'Định dạng bạn nhập chưa đúng. Vui lòng nhập lại.');
            }
        } else {
            $img = Product::find($id)->prd_img;
        }
        $info = $request->info;
        $describe = $request->describe;
        Product::find($id)->update([
            'prd_name' => $name,
            'cat_name' => $category,
            'prd_code' => $code,
            'prd_price' => $price,
            'prd_featured' => $featured,
            'prd_status' => $status,
            'prd_img' => $img,
            'prd_properties' => $info,
            'prd_details' => $describe,
            'slug' => $slug
        ]);
        return redirect()->route('product.index')->with('alert', 'Cập nhật sản phẩm "' . $request->name . '" thành công')->with('key', 'success');
    }


    //Search
    public function searchSubmit(Request $request)
    {
        $product = Product::search($request->search)->paginate(3);
        $count = count($product);
        $keyword = $request->search;
        return view('Backend.Product.search', compact('product', 'count', 'keyword'));
    }



    //Delete
    public function delete($id)
    {
        $prd = Product::find($id)->prd_name;
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('alert', 'Bạn đã xóa sản phẩm "' . $prd . '" thành công')->with('key', 'danger');
    }
}
