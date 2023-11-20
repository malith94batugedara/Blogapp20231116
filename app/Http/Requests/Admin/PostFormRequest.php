<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'category_id' => [
                'required'
            ],
            'name' => [
                'required'
            ],
            'slug' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'yt_iframe' => [
                'required'
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
            ]
        ];
        return $rules;
    }
}
