<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
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
            'name' => ['required', 'max:100'],
            'investigation_type' => ['required', 'max:100'],
            'academic_programs_id' => ['required', 'max:100'],
        ];
    }

    public function groups()
    {
        return [
            'name.required' => 'Por favor, escriba el nombre.',
            'name.max' => 'El nombre no puede superar los 100 caracteres.',

            'investigation_type.required' => 'Por favor, escriba el tipo de investigacion.',
            'investigation_type.max' => 'El tipo de investigacion no puede superar los 100 caracteres.',

            'academic_programs_id.required' => 'Por favor, escriba el id del programa academico.',
            'academic_programs_id.max' => 'El programa academico no puede superar los 100 caracteres.',
    ];
  }   
}
