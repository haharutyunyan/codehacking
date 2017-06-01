<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'      =>'required',
            'email'     =>'required|unique:users',
            'is_active' =>'required',
            'password'  =>'required',
            'photo_id'  =>'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'A title is required',
            'email.required'    => 'Active field is required',
            'role_id.required'  => 'Role field is required',
            'photo_id.required' => 'Photo field is required',
        ];

    }


}
