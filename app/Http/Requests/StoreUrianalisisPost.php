<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Ramsey\Uuid\v1;

class StoreUrianalisisPost extends FormRequest
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
            'color' => 'required|string|min:1| max:200',
            'hematies' => 'required|string|min:1| max:200',
            'olor' => 'required|string|min:1| max:200',
            'leucocitos' => 'required|string|min:1| max:200',
            'aspecto' => 'required|string|min:1| max:200',
            'bacterias' => 'required|string|min:1| max:200',
            'densidad' => 'required|string|min:1| max:200',
            'otros' => 'required|string|min:1| max:200',
            'ph' => 'required|string|min:1| max:200',
            'planas' => 'required|string|min:1| max:200',
            'glucosa' => 'required|string|min:1| max:200', 
            'transcicionales' => 'required|string|min:1| max:200',
            'proteinas' => 'required|string|min:1| max:200',
            'redondasp' => 'required|string|min:1| max:200',
            'nitritos' => 'required|string|min:1| max:200',
            'redondasg' => 'required|string|min:1| max:200', 
            'cetonas' => 'required|string|min:1| max:200',   
            'caudadas' => 'required|string|min:1| max:200', 
            'bilirrubina' => 'required|string|min:1| max:200',
            'cumulos' => 'required|string|min:1| max:200',
            'urobilinogeno' => 'required|string|min:1| max:200',  
            'cilindros' => 'required|string|min:1| max:200',
            'sangre' => 'required|string|min:1| max:200',
            'cristales' => 'required|string|min:1| max:200',
            'observacion' => 'nullable|string|min:1| max:200',
            'fecha'=> 'required|date|max: 2030-01-01'
        ];
    }
}
