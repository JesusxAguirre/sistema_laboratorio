<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompletaPut extends FormRequest
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
            'pacientes_id' => 'required|numeric|',
            'hemoglobina' => 'required|string|min:1| max:200',
            'hematocrito' => 'required|string|min:1| max:200',
            'leucocitosT' => 'required|string|min:1| max:200',
            'plaquetas' => 'required|string|min:1| max:200', 
            'neutrofilosS' => 'required|string|min:1| max:200',
            'neutrofilosB' => 'required|string|min:1| max:200',
            'linfocitos' => 'required|string|min:1| max:200',
            'monocitos' => 'required|string|min:1| max:200',
            'eosinofilos' => 'required|string|min:1| max:200', 
            'basofilos' => 'nullable|string|min:1| max:200',   
            'fecha'=> 'required|date_format: d/m/y|date|max: 2030-01-01'
        ];
    }
}
