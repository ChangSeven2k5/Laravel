<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    // Phân quyền
    {
        return True;
        /**
         * Thay đổi từ False bằng True: Mọi thông báo lỗi sẽ hiển thị
         *  False: Mọi thông báo lỗi không hiển thị ra màn hình
         */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Biết các lỗi
        ];
    }
    public function messages()
    {
        return [
            //Mình hiển thị messase bằng tiếng việt hay tiếng anh

        
        ];
    }
}
