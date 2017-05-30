<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResearchCentersRequest extends FormRequest
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
            'name' => ['required', 'max:100']
            //'init_date'=>['required']
        ];
    }

    public function researchCenters()
    {
        return [
            'name.required' => 'Por favor, escriba el nombre.',
            // 'name.max' => 'El nombre no puede superar los 100 caracteres.'
            // 'init_date.required' => 'Por favor, ingrese una fecha.',
            // 'observacion.required' => 'Por favor, haga una observación.',
            // 'groups_id.required'=>'id de grupo requerido',
        ];
    }
}
