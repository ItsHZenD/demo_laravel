<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
            ],
            'email' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\User,email',
            ],
            'level' => [
                'bail',
                'required',
            ],
            'password' => [
                'bail',
                'required',
                'string',
            ],
            'phone' => [
                'bail',
                'required',
                'string',
            ],
            'address' => [
                'bail',
                'required',
                'string',
            ],
            'gender' => [
                'bail',
                'required',
                'boolean',
            ],
            'birthdate' => [
                'bail',
                'required',
                'date',
            ],
        ];
    }
}
