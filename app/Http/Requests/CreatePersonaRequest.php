<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'cPerApellido'=> 'Ingrese sus apellidos.',
            'cPerNombre'=> 'Ingrese su nombre.',
            'cPerDireccion'=> 'Ingrese su dirección',
            'dPerFecNac'=> 'Ingrese su fecha de nacimiento.',
            'nPerEdad'=> 'Ingrese su edad.',
            'nPerSueldo'=> 'Ingrese su sueldo.',
            'nPerEstado'=> 'Escoja una de las opciones.'
        ];
    }
}
