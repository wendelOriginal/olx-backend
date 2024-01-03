<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name'=> 'required|min:4|string',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|string|min:6',
            'state_id'=> 'required|string|max:3|exists:states,id'
        ];
    }

    protected function failedValidation(Validator $validate): void
    {
      Throw new HttpResponseException(response()->json(
        [
            'error' => array_values($validate->errors()->getMessages())[0]
[0]        ]
        ));
    }
}


