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
                "nombre"=> 'required|alpha|max:10',
                "fechae"=> 'required',
                "fechar"=> 'required'
    
            
    
        ];
    }
public function messages()
{  

return [ 'codigo.required' => 'El codigo del proyecto  es Obligatorio',
'nombre.required' => 'El nombre del proyecto es obligatorio',
'fechae.required' => 'La fecha de entrega es obligatoria',
'fechar.required' => 'La fecha de Realizacion es obligatoria' ];
}
}
