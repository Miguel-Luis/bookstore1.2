<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required' => 'Debe ingresar un valor en el nombre',
            'name.string' => 'Use solo caracteres',
            'name.max' => 'Solo puede contener 255 caracteres',
            'email.required' => 'Debe ingresar un email !!!',
            'email.string' => 'Use solo caracteres',
            'email.email' => 'Rectifique que lo que esta ingresando sea un email',
            'email.max' => 'Se admiten solo 255 caracteres !!!',
            'email.unique' => 'Este email ya esta registrado',
            'password.required' => 'Debe ingresar una contraseña',
            'password.string' => 'Utilice solo caracteres',
            'password.min' => 'La contraseña debe tener minimo 8 caracteres',
            'password.confirmed' => 'Los password no coinciden'
        ];
    }
}
