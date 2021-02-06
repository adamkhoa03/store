<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function true()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'email'=>'required|email',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.required'=>'Bạn không được bỏ trống email',
            'password.required'=>'Bạn không được bỏ trống mật khẩu'
        ];
    }
}
