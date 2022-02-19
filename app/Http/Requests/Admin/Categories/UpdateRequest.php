<?php

namespace App\Http\Requests\Admin\Categories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

        $category = $this->request->get('category');

        $rules = [ 
             "category.parent_id"   => "required|integer",
             "category.is_active"   => "required|boolean",
             "category.title"       => "required|string|min:4|max:255|unique:\App\Models\Post,title,".$category['id'],
             "category.slug"        => "required|string|min:4|max:255|unique:\App\Models\Post,slug,".$category['id'],
             "category.description" => "required|string|min:5|max:255",
        ];
 
        return $rules;

    }

}