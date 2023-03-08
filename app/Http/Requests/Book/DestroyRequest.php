<?php

namespace App\Http\Requests\Book;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DestroyRequest extends FormRequest
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
                'required',
                Rule::exists(Book::class, 'id')
            ],
        ];
    }
    protected function prepareForValidation() 
    {
        $this->merge(['book' => $this->route('book')]);
    }
}
