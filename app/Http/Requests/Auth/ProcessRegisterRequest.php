<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ProcessRegisterRequest extends FormRequest
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
