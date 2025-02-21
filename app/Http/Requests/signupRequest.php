<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required|max:255|string',
            'age'=> 'required|numeric',
            'date'=> 'required|date',
            'phone'=> 'required|numeric',
            'web'=> 'required|string',
            'address'=> 'required|string',
        ];
    }

    public function messages() {
        return [
         
            'name.required' => 'Vui lòng nhập tên',
            'name.string' => 'Vui lòng nhập tên đúng định dạng chữ',

            'age.required' => 'Vui lòng nhập tuổi',
            'age.numeric' => 'Vui lòng nhập tuổi là số',

            'date.required' => 'Vui lòng nhập ngày tháng',
            'date.date' => 'Vui lòng nhập đúng định dạng ngày tháng',

            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Vui lòng chỉ nhập số cho số điện thoại',

            'web.required' => 'Vui lòng nhập địa chỉ website',
            'web.string' => 'Vui lòng nhập đúng định dạng đường dẫn',

            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.string' => 'Vui lòng nhập địa chỉ đúng định dạng',
        ] ;
    }
}
