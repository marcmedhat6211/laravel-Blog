<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return[
            'title.min' => 'title field should have 3 or more characters',
            'title.required' => 'title field is required',
            'description.min' => 'description field should have 3 or more characters',
            'description.required' => 'description field is required'
        ];
    }
}
