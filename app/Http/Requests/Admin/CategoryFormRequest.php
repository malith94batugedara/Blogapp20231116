<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        $rules = [
            'name' => [
                'required'
            ],
            'slug' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'image' => [
                'nullable'
            ],
            'meta_title' => [
                'required'
            ],
            'meta_description' => [
                'required'
            ],
            'meta_keyword' => [
                'required'
            ],
            'status' => [
                'nullable'
            ],
            'navbar_status' => [
                'nullable'
            ],
        ];

        return $rules;
    }
}
