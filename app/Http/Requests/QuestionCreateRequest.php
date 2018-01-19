<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionCreateRequest extends FormRequest
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
            'title' => 'required|unique:questions|max:255',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'title must be unique',
            'title.required' => 'question title is required',
            'content.required' => 'question content is required',
        ];
    }
}
