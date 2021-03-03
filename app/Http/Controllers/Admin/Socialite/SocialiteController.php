<?php

namespace App\Http\Controllers\Admin\Socialite;

use App\Http\Controllers\Controller;
use App\Model\Admin\Users;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
class SocialiteController extends Controller
{
    //
    public function authentical($social){
        
        return Socialite::driver($social)->redirect();
    }
    public function redirect($social){
        // $user = Socialite::driver($social)->user();
        return redirect()->route('admin.index');
    }
}
