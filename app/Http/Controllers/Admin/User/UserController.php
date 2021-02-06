<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UserRequest;
use App\Model\Admin\Users;
use Illuminate\Http\Request;


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
    public function postCreate(UserRequest $request)
    {
        Users::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'full' => $request->full,
            'level' => $request->level
        ]);
        return redirect()->route('user.index')->with('key', 'success')->with('content', 'Thêm thành viên thành công');
    }

    //Edit
    public function getEdit($id)
    {   $users = Users::find($id);
        session(['id'=>$id]);
        return view('Backend.User.edituser',['users'=>$users]);
    }
    public function postEdit($id,EditUserRequest $request)
    {
        Users::find($id)->update([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'full' => $request->full,
            'level' => $request->level
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
}
