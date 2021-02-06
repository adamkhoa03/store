<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   $id = session('id');
        return [
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required',
            'full'=>'required',
            'address'=>'required',
            'phone'=>'required|min:10|max:13',
        ];
    }
    public function messages()
    {
        return [
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.required'=>'Bạn không được bỏ trống email',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Mật khẩu không được để trống',
            'full.required'=>'Họ và tên không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'phone.required'=>'Số điện thoại không được để trống',
            'phone.min'=>'Bạn chưa nhập đúng định dạng số điện thoại',
            'phone.max'=>'Bạn chưa nhập đúng định dạng số điện thoại'
        ];
    }
}
