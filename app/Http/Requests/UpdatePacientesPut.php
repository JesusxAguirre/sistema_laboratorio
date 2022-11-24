<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePacientesPut extends FormRequest
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
            'id' => 'required|exists:pacientes,id',
            'nombre' => 'required|string|min:3| max:40',
            'remitente' => 'required|string|min:3| max:40',
            'raza'=> 'required|string|min:3| max:15',
            'edad'=> 'required|numeric| max:20',
            'sexo'=> 'required|string| max: 8',
            'fecha'=> 'required|date|max: 2030-01-01'
        ];
    }
}
