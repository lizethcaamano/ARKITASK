<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            "codigo" => 'required|max:10',
            "inicio" => 'required',
            "desactivacion" =>'required'
        ];
    }

public function messages()
{
    return [
        'codigo.required' => 'El codigo del Proyecto es Obligatorio',
        'codigo.max' => 'Solo se aceptan maximo 10 caracteres'
    ];
}


}
