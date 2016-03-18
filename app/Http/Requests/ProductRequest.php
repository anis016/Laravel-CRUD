<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'name'     => 'required|max:255',
            'quantity' => 'required|numeric',
            'price'    => 'required',
            'user_id'  => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Product name is required',
            'name.max' => 'Product name cannot be more than 255 characters.',
            'quantity.required'  => 'Quantity is required',
            'quantity.numeric'  => 'Quantity should be numeric',
            'price.required'  => 'Price is required',
            'user_id.required'  => 'Customer name should be provided',
        ];
    }
}
