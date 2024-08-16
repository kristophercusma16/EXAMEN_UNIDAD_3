<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required|string|max:100',
            'email' => 'required|string|email|max:30|unique:clientes',
            'direccion' => 'required|string|max:100',
            'fono' => 'required|string'
        ];
    }
    // las reglas  de validación
    public function messages(): array
    {
        return [
            'nombres.required' => 'Es necesario su nombre.',
            'email.required' => 'Es requerido el email.',
            'email.email' => 'Debe ser un email válida.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'direccion.required' => 'El campo dirección es necesario.',
            'fono.required' => 'El campo fono es obligatorio.',
        ];
    }

}
