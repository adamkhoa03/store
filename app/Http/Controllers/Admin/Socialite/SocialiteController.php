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
        $user = Socialite::driver($social)->user();
        $check = Users::where('social_id', $user->id)->orwhere('email',$user->email)->first();
        if ($check) {
            Auth::login($check);
            return redirect()->route('admin.index');
        } else {           
            Users::create([
                'full'=>$user->name,
                'email'=>$user->email,
                'social_id'=>$user->id,
                'avatar'=>$user->avatar,
                'level'=>2
            ]);
            $check = Users::where('social_id', $user->id)->first();
            Auth::login($check);
        }
        return redirect()->route('admin.index');
    }
}
