<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
         
                "codigo"=> 'required|max:10',
                "nombre"=> 'required|max:20',
                "fechae"=> 'required',
                "fechar"=> 'required'
    
            
    
        ];
    }
public function messages()
{  

return [ 'codigo.required' => 'El codigo del proyecto  es Obligatorio',
'nombre.required' => 'El nombre del proyecto es obligatorio',
'codigo.max' => 'Solo se aceptan maximo 10 caracteres',
'nombre.max' => 'Solo se aceptan maximo 20 caracteres',
'fechae.required' => 'La fecha de entrega es obligatoria',
'fechar.required' => 'La fecha de Realizacion es obligatoria' ];
}
}
