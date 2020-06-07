<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'author' => 'required',
            'description' => ['required', 'max:1000'],
            'category' => ['required', 'integer']
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
            'name.required' => 'Debes ingresar el nombre del libro',
            'author.required' => 'Ingresa el nombre del autor',
            'description.required' => 'Ingresa una descripción',
            'description.max' => 'Debes ingresar menos de 1000 caracteres',
            'category.required' => 'Debes elegir una categoria'
        ];
    }
}
