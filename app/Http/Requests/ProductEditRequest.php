<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
    {
        $id = session('id');
        return [
            //
            'code'=>'required|unique:products,prd_code,'.$id,
            'name'=>'required',
            'price'=>'required',
            'info'=>'required',
            'describe'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required'=>'Bạn phải nhập mã sản phẩm',
            'code.unique'=>'Mã sản phẩm đã tồn tại',
            'price.required'=>'Bạn phải nhập giá sản phẩm',
            'info.required'=>'Thông tin không được bỏ trống',
            'describe.required'=>'Mô tả sản phẩm không được để trống'
        ];
    }
}
