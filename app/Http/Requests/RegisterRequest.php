<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtemail'=>'required|unique:users,email',
            'txtpassword'=>'required|alpha_num|between:6,20', //min:3,
            'txtrepassword'=>'required|same:txtpassword',
            'txtfullname'=>'required',
            'txtbirthday'=>'required',
            'txtgender'=>'required',
            'txtagree_rule'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'txtemail.required'=>'Vui lòng nhập email',
            'txtemail.unique'=>'Email đã tồn tại',
            'txtpassword.required'=>'Vui lòng nhập password',
            'txtpassword.between'=>'Mật khẩu phải từ 6-20 kí tự',
            'txtpassword.alpha_num'=>'Mật khẩu phải chứa kí tự và số',
            'txtrepassword.same'=>'Mật khẩu không khớp',
            'txtfullname.required'=>'Vui lòng nhập họ tên đầy đủ',
            'txtbirthday.required'=>'Vui lòng nhập ngày sinh',
            'txtgender.required'=>'Vui lòng chọn giới tính',
            'txtagree_rule.required'=>'Bạn phải đồng ý với điều khoản'
        ];
    }
}
