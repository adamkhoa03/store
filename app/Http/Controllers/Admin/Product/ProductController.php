<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Model\Admin\Category;
use App\Model\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product(){
        $product = Product::paginate(3);
        return view('Backend.Product.product',compact('product'));
    }

    //Add
    public function getAdd(){
        $category = Category::all();
        return view('Backend.Product.addproduct',compact('category'));
    }
    public function postAdd(AddProductRequest $request){
        
        return redirect()->back();
    }

    //Edit
    public function getEdit($id){
       $product = Product::find($id);
       $category = Category::all();
        return view('Backend.Product.editproduct',compact('product','category'));
    }
    public function postEdit($id){
        return redirect()->back();
    }


    //Search
    public function searchSubmit(Request $request){
    $product = Product::search($request->search)->paginate(3);
    $count = count($product);
    $keyword = $request->search;
    return view('Backend.Product.search',compact('product','count','keyword'));
    }



    //Delete
    public function delete($id){
        $prd = Product::find($id)->prd_name;
        // Product::find($id)->delete();
        return redirect()->route('product.index')->with('alert','Bạn đã xóa sản phẩm '.$prd.' thành công')->with('key','danger');
    }
}
