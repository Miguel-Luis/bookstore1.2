<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required',
            'description' => ['required', 'max:255'],
            'priority' => ['required', 'integer']
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'name.required' => 'Debes ingresar un nombre',
            'description.required' => 'Ingresa una descripción',
            'description.max' => 'Debes ingresar menos de 255 caracteres',
            'priority.required' => 'Debes elegir un numero para la prioridad'
        ];
    }
}
