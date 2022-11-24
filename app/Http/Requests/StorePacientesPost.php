<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePacientesPost extends FormRequest
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
            'nombre' => 'required|string|min:3| max:40',
            'especie'=> 'required|string| max: 8',
            'remitente' => 'required|string|min:3| max:300',
            'raza'=> 'required|string|min:3| max:150',
            'edad'=> 'required|string| max:200',
            'sexo'=> 'required|string| max: 8',
            'propietario'=> 'required|string| max: 100',  
        ];
    }
}
