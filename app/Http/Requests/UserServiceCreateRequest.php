<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserServiceCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'companyname'=>['required','string'],
            'service'=>['required','string'],
            'phone'=>['required'],
            'description'=>['required','string'],
            'annualrevenues'=>['required'],
            'companywebsite'=>['required','string'],
            'comments'=>['required','string'],
            'time'=>['required'],
            'date'=>['required','date'],
        ];
    }
}
