<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name'      => 'required',
            'email'     => 'required|unique:users,email',
            'password'  => 'required',
            'role_id'   => 'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'     => 'A name is required',
          'email.required'    => 'A email is required',
          'password.required' => 'A password is required',
          'role_id.required'  => 'A role is required'
        ];
    }
}
