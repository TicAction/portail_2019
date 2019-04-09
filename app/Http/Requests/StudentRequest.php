<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'firstname'=>'required|min:3',
            'lastname'=>'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'Le prénom est obligatoire',
            'firstname.min' => 'Le prénom plus grand que 3 caractères',
            'lastname.required' => 'Le nom de famille est obligatoire',
            'lastname.min' => 'Le nom de famille plus grand que 3 caractères',
        ];
    }

}
