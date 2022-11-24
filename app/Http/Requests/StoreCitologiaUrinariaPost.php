<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitologiaUrinariaPost extends FormRequest
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
            'diagnostico' => 'required|string|min:3| max:40',
            'extraccion' => 'required|string|min:3| max:40',
            'fecha'=> 'required|date|max: 2030-01-01',
            'imagen1' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'imagen2' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'imagen3' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',    
            'imagen4' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',    
        ];
    }
}