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
        return [
            'firstName' => 'required|alpha',
            'secondName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'secondLastName' => 'required|alpha',
            'identificationType' => 'required|alpha|min:1',
            'identification' => 'required|numeric|min:7',
            'genre' => 'required|numeric|min:1',
            'birthdate' => 'required|before:tomorrow',
            'rif' => 'required|numeric|min:7',
        ];
    }
}
