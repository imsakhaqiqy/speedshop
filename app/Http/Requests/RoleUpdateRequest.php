<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleUpdateRequest extends Request
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
            'code'          => 'required|unique:roles,code,'.$this->route('role'),
            'name'          => 'required|unique:roles,name,'.$this->route('role'),
            'label'   => 'required'
        ];
    }

    public function messages()
    {
      return [
        'code.required'     => 'A code is required',
        'name.required'    => 'A name is required',
        'label.required'  => 'A description is required'
      ];
    }
}
