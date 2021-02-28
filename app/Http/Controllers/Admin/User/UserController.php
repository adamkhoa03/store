<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UserRequest;
use App\Model\Admin\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function user()
    {
        $users = Users::paginate(3);
        return view('Backend.User.user', compact('users'));
    }

    ////Create
    public function getCreate()
    {
        return view('Backend.User.adduser');
    }
    public function postCreate(Request $request)
    {
        if($request->has('avatar')){
            $name = $request->avatar->getClientOriginalName();
            $avatar = '/store/public/backend/avatar/'.$name;
            $request->avatar->move('public/backend/avatar',$name);
        }
        else{
            $avatar = '/store/public/backend/avatar/avatar0.png';
        }
        Users::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'full' => $request->full,
            'level' => $request->level,
            'avatar'=>$avatar
        ]);
        return redirect()->route('user.index')->with('key', 'success')->with('content', 'Thêm thành viên thành công');
    }

    //Edit
    public function getEdit($id)
    {   $users = Users::find($id);
        session(['id'=>$id]);
        return view('Backend.User.edituser',['users'=>$users]);
    }
    public function postEdit($id,Request $request)
    {

        if($request->avatar == ""){
            $avatar = Users::find($id)->avatar;  
        }
        else{
            $name = $request->avatar->getClientOriginalname();
            $avatar = '/store/public/backend/avatar/'.$name;
            $request->avatar->move('public/backend/avatar',$name);
        }
        Users::find($id)->update([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'full' => $request->full,
            'level' => $request->level,
            'avatar'=>$avatar
        ]);
        return redirect()->route('user.index')->with('key','success')->with('content','Cập nhật thành viên thành công!');
    }

    //Delete
    public function delete($id,Request $request)
    {   $user = Users::find($id)->full;
        $request->session()->flash('key','danger');
        $request->session()->flash('content','Xóa thành công thành viên: '.$user);
        Users::find($id)->delete();
        return redirect()->route('user.index');
    }

    //Profile
    public function getProfile(){
       $profile = Auth::user();
       return view('Backend.User.profile',compact('profile'));
    }
    public function postProfile(){
        return redirect()->back();
    }
}
