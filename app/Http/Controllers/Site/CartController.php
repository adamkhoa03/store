<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart(){
        return view('Site.Cart.cart');
    }

    //Checkout
    public function checkout(){
        return view('Site.Cart.checkout');
    }

    //Result
    public function result(){
        return view('Site.Cart.result');
    }
}
