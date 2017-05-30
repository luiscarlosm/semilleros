<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class CreateEventsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolval(var)
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
            'final_date' => ['required', 'max:100'],
            'place' => ['required', 'max:100'],
            'resource' => ['required', 'max:100'],
            'event_type' => ['required', 'max:100'],
            'projects_id' => ['required', 'max:100'],
        ];
    }

    public function sectionals()
    {
        return [
            'name.required' => 'Por favor, escriba el nombre.',
            'name.max' => 'El nombre no puede superar los 100 caracteres.',

            'init_date.required' => 'Por favor, escriba el init_date.',
            'init_date.max' => 'El init_date no puede superar los 100 caracteres.',

            'final_date.required' => 'Por favor, escriba la observacion.',
            'final_date.max' => 'La observacion no puede superar los 100 caracteres.',

            'type_project.required' => 'Por favor, escriba el tipo de proyecto.',
            'type_project.max' => 'El tipo de proyecto no puede superar los 100 caracteres.',

            'place.required' => 'Por favor, escriba el research_centers_id.',
            'place.max' => 'El research_centers_id no puede superar los 100 caracteres.',

            'resource.required' => 'Por favor, escriba el research_centers_id.',
            'resource.max' => 'El research_centers_id no puede superar los 100 caracteres.',

            'event_type.required' => 'Por favor, escriba el research_centers_id.',
            'event_type.max' => 'El research_centers_id no puede superar los 100 caracteres.',

            'projects_id.required' => 'Por favor, escriba el research_centers_id.',
            'projects_id.max' => 'El research_centers_id no puede superar los 100 caracteres.',

        ];
    }
}