<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'tags' => 'required|array',
            'name' => 'required|unique:posts,name',
            'slug' => 'required|unique:posts,slug, '.$this->post,
            'excerpt' => 'required',
            'body' => 'required',
            'status' => 'required|in:DRAFT,PUBLISHED',
            'file'=>'sometimes|mimes:jpg,jpeg,png',


        ];



    }
}
