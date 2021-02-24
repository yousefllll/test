<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagsRequest extends FormRequest
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
             'name' => 'required',
             'slug' => 'required|unique:tags,slug,'.$this -> id
        ];
    }

    public function messages()
    {
        return [

            'name.required' => __('admin/setting.name is required'),
            'slug.required' => __('admin/setting.the name with the link is required'),
            

            ];
    }

}
