<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'nationality' => 'required|string|max:3',
            'title' => 'required|string',
            'category' => 'required|string',
            'group' => 'string',
            'author_id' => 'numeric',
            'language' => 'required|max:2',
            'year' => 'required|numeric',
            'description' => 'string',
        ];
    }
}
