<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
class RegisterRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ];
    }

    /**
     * Tùy chỉnh thông báo lỗi.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
           'name.required' => 'Vui lòng nhập họ và tên.',
            'name.string' => 'Họ và tên chỉ được chứa ký tự chữ.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email này đã được đăng ký, vui lòng chọn email khác.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'c_password.required' => 'Vui lòng nhập lại mật khẩu.',
            'c_password.same' => 'Mật khẩu nhập lại không khớp.',
        ];
    }

   
}
