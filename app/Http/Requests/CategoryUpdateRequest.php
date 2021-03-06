<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryUpdateRequest extends Request
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
            'name' => 'required|unique:categories,name,'.$this->route('category'),
            'family_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'A name is required',
            'family_id' => 'A family is required'
        ];
    }
}
