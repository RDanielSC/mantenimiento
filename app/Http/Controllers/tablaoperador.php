<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;

class tablaoperador extends Controller
{
    /**tablaoperador
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $operadores = Operador:: select('operador.Operador_ID',
            'operador.Nombre',
            'operador.Llave',
            'cargo.Descripcion AS Cargo',
            'gerencia.Descripcion AS Gerencia',
            'area.Descripcion AS Area')
            ->leftjoin('cargo','cargo.Cargo_ID','=','operador.Cargo_ID')
            ->leftjoin('gerencia','gerencia.Gerencia_ID','=','operador.Gerencia_ID')
            ->leftjoin('area','area.Area_ID','=','operador.Area_ID')->get();
        return Datatables::of($operadores)->addColumn('action', function ($operadores) {
            return '<a href="/operador/'.$operadores->Operador_ID.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <a href="/operador/'.$operadores->Operador_ID.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
