<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductStoreRequest extends Request
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
            'name'          => 'required',
            'stock'         => 'required',
            'minimum_stock' => 'required',
            'family_id'     => 'required',
            'price'         => 'required',
            'category_id'   => 'required',
            'unit_id'       => 'required',
            'description'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'A name is required',
            'stock.required'        => 'A stock is required',
            'minimum_stock'         => 'A minimum stock is required',
            'family_id.required'    => 'A family is required',
            'price.required'        => 'A price is required',
            'category_id.required'  => 'A category is required',
            'unit_id.required'         => 'A unit is required',
            'description.required'  => 'A description is required'
        ];
    }
}
