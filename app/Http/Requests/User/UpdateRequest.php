<?php

namespace App\Http\Requests\User;

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
            ],
            'email' =>  [
                'bail',
                'required',
                'string',
                Rule::unique(User::class)->ignore($this->user),
            ],
            'level' => [
                'bail',
                'required',
            ],
            // 'password' => [
            //     'bail',
            //     'required',
            //     'string',
            // ],
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
            ] ,

        ];
    }
}
