<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
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
    public function postAdd(){
        return view('Backend.Product.addproduct');
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
    $product = Product::paginate(3);
    $array_search = explode(' ',$request->search);
    $search = Product::where('prd_name','like','%'.implode('%',$array_search).'%')->orWhere('prd_code','like',$request->search)->get();
    $count = $search->count();
    return view('Backend.Product.search',compact('product','search','count'));
    }



    //Delete
    public function delete(){
        
    }
}
