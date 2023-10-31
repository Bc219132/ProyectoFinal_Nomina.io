<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonUpdateRequest extends FormRequest
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
        $id = request()->route('persona');
        return [
            'firstName' => 'required|alpha',
            'secondName' => 'nullable|alpha',
            'lastName' => 'required|alpha',
            'secondLastName' => 'nullable|alpha',
            'identificationType' => 'required|alpha',
            'identification' => "required|regex:/^\d*$/|between:7,8|unique:personas,Cedula,$id",
            'genre' => 'required|numeric|min:1',
            'birthdate' => 'required|before:tomorrow',
            'rif' => "required|regex:/^\d*$/|between:9,10|unique:personas,RIF,$id",
            'phone' => 'required|regex:/^\d*$/|size:11'

        ];
    }
}
