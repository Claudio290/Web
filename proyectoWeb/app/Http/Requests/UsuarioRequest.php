<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'rut' => ['required', 'string', 'max:12', 'unique:usuarios,rut'],
            'nombre' => ['required','string,max:255'],
            'password' => ['required','string','min:8','confirmed'],
            'perfil' => ['required','exists:perfiles,id'],
        ];
    }
    public function messages(): array
    {
        return [
            'rut.required' => 'Ingrese el rut',
            'rut.unique' => 'Ya existe un usuario con ese rut',
            'nombre.required' => 'Nombre de usuario',
            'nombre.string' => 'Solo puede ser letras',
            'nombre.max' =>'Solo puede ser hasta maximo 255 letras',
        ];
    }
}
