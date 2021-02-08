<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('danger','Vui lòng đăng nhập để tiếp tục !!!');
    }
}