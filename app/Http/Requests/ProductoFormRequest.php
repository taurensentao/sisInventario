<?php

namespace sisInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'categoria_id'=>'required',
            'codigo'=>'required|numeric|unique:producto',
            'nombre'=>'required|max:100',
            'tamano'=>'required|numeric',
            'precio'=>'required|numeric',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png'
        ]; 
    }
}
