<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleStoreRequest extends Request
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
            'code'        => 'required|unique:roles,code',
            'name'        => 'required|unique:roles,name',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'code.required'         => 'A code is required',
            'name.required'         => 'A name is required',
            'description.required'  => 'A description is required'
        ];
    }
}
