<?php

namespace sisInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'nombre'=>'required|max:100',
            'apellido'=>'required|max:100',
            'celular'=>'max:15',
            'correo'=>'max:50',
            'direccion'=>'max:70'
        ];
    }
}
