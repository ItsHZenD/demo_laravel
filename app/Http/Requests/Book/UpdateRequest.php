<?php

namespace App\Http\Requests\Book;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        return [
            'name' => [
                'bail',
                'required',
                'string',
                Rule::unique(Book::class)->ignore($this->book),
            ],
            'author' => [
                'bail',
                'required',
                'string',
            ],

        ];
    } 
}
