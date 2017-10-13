<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/8/30
 * Time: 上午11:10
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return  [
            'username' => ['required', 'min:6', 'max:20', 'unique'],
            'password' => ['required', 'min:8', 'max:16']
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '必须填写“用户名”',
            'username.min' => '“用户名”不能小于6个字。',
            'username.max' => '“用户名”不能大于20个字。',
            'password.required' => '必须填写“密码”',
            'password.min' => '“用户名”不能小于8个字。',
            'password.max' => '“用户名”不能大于16个字。',
        ];
    }
}