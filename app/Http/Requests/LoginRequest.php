<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
         
                "nombre"=> 'required|max:15',
                "apellido"=> 'required|max:15',
                "correo"=> 'required|email',
                "numerodocumento"=> 'required|max:10',
                "fechanacimiento"=> 'required',
                "telefono"=> 'required|max:10',
                "imagen"=> 'required'
    
            
    
        ];
    }
public function messages()
{  

return 
[ 'nombre.required' => 'El nombre del usuario es obligatorio',
'apellido.required' => 'El apellido del usuario es obligatorio',
'nombre.max' => 'Solo se aceptan maximo 15 caracteres',
'apellido.max' => 'Solo se aceptan maximo 15 caracteres',
'correo.required' => 'Es obligatorio un correo electronico del usuario',
'correo.email' => 'Debe contener un @gmail.com, @hotmail.com o @outlook.com',
'numerodocumento.required' => 'Es obligatorio colocar el número de documento del usuario',
'numerodocumento.max' => 'Solo se aceptan maximo 10 caracteres',
'fechanacimiento.required' => 'La facha de nacimiento es obligatoria',
'telefono.required' => 'Por favor ingrese un telefono de contacto',
'telefono.max' => 'Solo se aceptan maximo 10 caracteres',
'imagen.required' => 'Por favor cargue una imagen suya'
];
}
}