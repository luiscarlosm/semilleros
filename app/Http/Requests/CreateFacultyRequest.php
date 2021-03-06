<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFacultyRequest extends FormRequest
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
            'sectionals_id' => ['required', 'max:100']

        ];
    }

    public function faculties()
    {
        return [
            'name.required' => 'Por favor, escriba el nombre.',
            'name.max' => 'El nombre no puede superar los 100 caracteres.',

            'sectionals_id.required' => 'Por favor, escriba el research_centers_id.',
            'sectionals_id.max' => 'El research_centers_id no puede superar los 100 caracteres.',

        ];
    }
}
