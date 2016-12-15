<?php

namespace App\Http\Requests\Equipo;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EquipoUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function _construct(Route $route)
    {
      $this->route = $route;

    }

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
            'Tag'=> 'required|min:4',/*|unique:equipo,Tag,'.$this->route->getparameter('equipo'),*/
            'Descripcion'=>'required',
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
