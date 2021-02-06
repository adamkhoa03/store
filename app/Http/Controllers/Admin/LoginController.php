<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLogin(Request $request){
        return view('Backend.login');
    }
    public function postLogin(LoginRequest $request){
        if($request->remember){
            $remember = true;
        }
        else{
            $remember = false;
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)){
           return redirect()->route('admin.index');
        }
        else{
            return redirect()->back()->withInput()->with('danger','Tên đăng nhập hoặc mật khẩu chưa đúng');
        }
       
    }
}
