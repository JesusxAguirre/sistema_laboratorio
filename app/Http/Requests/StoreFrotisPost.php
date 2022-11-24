<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFrotisPost extends FormRequest
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
            'observacione' => 'required|string|min:1| max:800',
            'observacionl' => 'required|string|min:1| max:1200',
            'observaciont' => 'required|string|min:1| max:800',
            'observacion' => 'required|string|min:1| max:800',
            'fecha' => 'required|string|min:1| max:800',
        ];
    }
}
