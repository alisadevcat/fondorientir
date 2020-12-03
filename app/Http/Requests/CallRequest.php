<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class CallRequest extends FormRequest
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
        'name' => ['required','min:2','max:255','regex:/^[a-zA-Z]+(?:[\-\s.]+[a-zA-Z]+)*$/'],
        'phone' => ['required','min:2','max:255','regex:/^(?:\+|\d)[\d\-\(\) ]{9,}[0-9]$/'],
        ];
    }
    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json(['errors'=>$validator->errors()], 200));
    }
}
