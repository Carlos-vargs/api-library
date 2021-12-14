<?php

namespace App\Http\Requests;

use App\Models\Author;
use Illuminate\Foundation\Http\FormRequest;

class AuthorPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        $text = request()->first_name;

        $authorExists = Author::where('first_name', $text)->exists();

        if ($authorExists) {
            return false;
        }

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
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'first_name is required',
            'last_name.required' => 'last_name is required',
            'nationality.required' => 'nationality is required',
        ];
    }
}
