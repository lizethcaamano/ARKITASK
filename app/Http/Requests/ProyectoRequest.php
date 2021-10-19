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
         
                "codigo"=> 'required|max:20',
                "nombre"=> 'required|regex:/^[a-zA-Z\s]+$/u|max:40',
                "fechae"=> 'required',
                "fechar"=> 'required'
                
    
            
    
        ];
    }
public function messages()
{  

return [ 'codigo.required' => 'El codigo del proyecto  es Obligatorio',
'nombre.required' => 'El nombre del proyecto es obligatorio',
'nombre.regex' => 'Solo se permiten letras ',
'codigo.max' => 'Solo se aceptan maximo 10 caracteres',
'nombre.max' => 'Solo se aceptan maximo 20 caracteres',
'fechae.required' => 'La fecha de entrega es obligatoria',
'fechar.required' => 'La fecha de Realizacion es obligatoria' ];
}
}
