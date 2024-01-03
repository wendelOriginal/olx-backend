<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SiginRequest extends FormRequest
{



    public function rules(): array
    {
        return [
            'email'=> 'required|max:255|email',
            'password'=> 'required|min:3|max:255'
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'error'=> array_values($validator->errors()->getMessages())[0][0]
            ]
            ));
    }
}
