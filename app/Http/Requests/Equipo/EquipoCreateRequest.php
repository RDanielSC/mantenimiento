<?php

namespace App\Http\Requests\Equipo;

use App\Http\Requests\Request;

class EquipoCreateRequest extends Request
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

           'Tag'=> 'required|min:4|unique:equipo,Tag',
            'Descripcion'=>'required|unique:equipo,Descripcion',
            'Area_ID'=>'required|not_in:0',
        ];
    }
    public function messages()
    {
        return [
            'Area_ID.not_in'=>'El campo Area es obligatorio',
            ];
    }

}
