<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FlexSliderRequest extends Request
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
            'txttitle'=>'required',
            'txtimage'=>'required'
        ];
    }

    public function messages()
    {
        return [
           'txttitle.required'=>'Bạn Phải Nhập Tiêu Đề',
           'txtimage.required'=>'Bạn Phải Nhập Ảnh'
        ];
    }
}
