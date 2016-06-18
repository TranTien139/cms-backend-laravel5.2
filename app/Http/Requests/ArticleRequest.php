<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'txttitle'=>'required',
            'txtimage'=>'required',
            'txtcontent'=>'required',
            'txtdescription'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'txttitle.required'=>'Bạn phải nhập trường tiêu đề',
            'txtimage.required'=>'Bạn phải nhập trường ảnh',
            'txtcontent.required'=>'Bạn phải nhập trường nội dung',
            'txtdescription.required'=>'Bạn phải nhập mô tả'
        ];
    }
}
