<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
            'group' => 'required',
            'name' => 'required | min:3',
            'birthday' => 'required',
            'gender' => 'required',
            'phone' => 'required | max:11 |min:10',
            'cmnd' => 'required | max:12',
            'email' => 'required',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'group.required' => 'Mã nhân viên không được để trống',
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên không được nhỏ hơn 3',
            'birthday.required' => 'Ngày sinh không được để trống',
            'gender.required' => 'Giới tính không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại không được nhỏ hơn 10',
            'phone.max' => 'Số điện thoại không được lớn hơn 11',
            'cmnd.required' => 'Số CMND không được để trống',
            'cmnd.max' => 'Số CMND không được để trống',
            'email.required' => 'Email không được để trống',
            'address.required' => 'Địa chỉ không được để trống'
        ];
    }
}
