<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Ramsey\Uuid\v1;

class StoreQuimicaPost extends FormRequest
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
            'glucosa' => 'nullable|string|min:1| max:200',
            'urea' => 'nullable|string|min:1| max:200',
            'creatinina' => 'nullable|string|min:1| max:200',
            'alt' => 'nullable|string|min:1| max:200',
            'ast' => 'nullable|string|min:1| max:200',
            'ggt' => 'nullable|string|min:1| max:200',
            'LDH' => 'nullable|string|min:1| max:200',
            'fosfatasa' => 'nullable|string|min:1| max:200',
            'amilasa' => 'nullable|string|min:1| max:200',
            'lipasa' => 'nullable|string|min:1| max:200',
            'bilirrubinaT' => 'nullable|string|min:1| max:200', 
            'bilirrubinaD' => 'nullable|string|min:1| max:200',
            'bilirrubinaI' => 'nullable|string|min:1| max:200',
            'protienasT' => 'nullable|string|min:1| max:200',
            'albumina' => 'nullable|string|min:1| max:200',
            'globulinas' => 'nullable|string|min:1| max:200', 
            'relacionag' => 'nullable|string|min:1| max:200',   
            'colesterolT' => 'nullable|string|min:1| max:200', 
            'calcio' => 'nullable|string|min:1| max:200',
            'fosforo' => 'nullable|string|min:1| max:200',
            'sodio' => 'nullable|string|min:1| max:200',  
            'cloro' => 'nullable|string|min:1| max:200',
            'potasio' => 'nullable|string|min:1| max:200',
            'fecha'=> 'required|date|max: 2030-01-01'
        ];
    }
}
