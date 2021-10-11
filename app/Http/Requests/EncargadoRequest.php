<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncargadoRequest extends FormRequest
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
         
                "fechaInicio"=> 'required',
                "fechaFinal"=> 'required',
                "observaciones"=> 'required|max:200'
            
    
        ];
    }
public function messages()
{  

return 
[ 'observaciones.required' => 'Por favor ingrese las observaciónes necesarias',
'observaciones.max' => 'Solo se aceptan maximo 200 caracteres',
'fechaInicio.required' => 'La facha de inicio es obligatoria',
'fechaFinal.required' => 'La facha de finalización es obligatoria'
];
}
}