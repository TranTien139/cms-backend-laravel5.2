<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GroupFlexSliderRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtname'=>'required',
            'txtagree_rule'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'txtname.required'=>'Bạn Phải Nhập Trường Tên',
            'txtagree_rule.required'=>'Bạn Phải Đồng ý Với Điều Khoản',
        ];
    }
}
