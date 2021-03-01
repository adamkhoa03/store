<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
        return [
            //
            'code'=>'required|unique:products,prd_code',
            'name'=>'required|unique:products,prd_name',
            'price'=>'required|numeric',
            'info'=>'required',
            'describe'=>'required',
            'img'=>'required|mimes:jpeg,png,jpg,bmp,gif'
        ];
    }
    public function messages()
    {
        return [
            'code.required'=>'Mã sản phẩm không được để trống',
            'code.unique'=>'Mã sản phẩm đã tồn tại',
            'name.required'=>'Tên sản phẩm không được để trống',
            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'price.required'=>'Giá sản phẩm không được để trống',
            'price.numeric'=>'Giá sản phẩm chưa đúng',
            'info.required'=>'Thông tin sản phẩm không được bỏ trống',
            'describe.required'=>'Mô tả sản phẩm không được bỏ trống',
            'img.required'=>'Bạn chưa đưa ảnh sản phẩm lên',
            'img.mimes'=>'Định dạng ảnh phải ở dạng jpg, jpeg, png, bmp'
        ];
    }
}
