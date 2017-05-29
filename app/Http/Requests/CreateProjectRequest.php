<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'init_date' => ['required', 'max:100'],
            'observation' => ['required', 'max:100'],
            'research_centers_id' => ['required', 'max:100']
        ];
    }

    public function sectionals()
    {
        return [
            'name.required' => 'Por favor, escriba el nombre.',
            'name.max' => 'El nombre no puede superar los 100 caracteres.',

            'init_date.required' => 'Por favor, escriba el init_date.',
            'init_date.max' => 'El init_date no puede superar los 100 caracteres.',

            'observation.required' => 'Por favor, escriba la observacion.',
            'observation.max' => 'La observacion no puede superar los 100 caracteres.',

            'research_centers_id.required' => 'Por favor, escriba el research_centers_id.',
            'research_centers_id.max' => 'El research_centers_id no puede superar los 100 caracteres.',
        ];
    }
}
