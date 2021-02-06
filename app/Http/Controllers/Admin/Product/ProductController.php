<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product(){
        return view('Backend.Product.product');
    }

    //Add
    public function getAdd(){
        return view('Backend.Product.addproduct');
    }
    public function postAdd(){
        return view('Backend.Product.addproduct');
    }

    //Edit
    public function getEdit(){
        return view('Backend.Product.editproduct');
    }
    public function postEdit(){
        return view('Backend.Product.editproduct');
    }

    //Delete
    public function delete(){
        
    }
}
