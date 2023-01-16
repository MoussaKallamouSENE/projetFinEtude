<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "prename"=>['required', 'string', 'min:3', 'max:30'],
            "name"=>['required', 'string', 'min:3', 'max:30'],
            'email'=>['required', 'email' , 'unique:users'],
            'phone'=>['required', 'unique:users'],
            'role' => ['required']
        ];
    }
}
