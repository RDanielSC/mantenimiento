<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
class tablaequipo extends Controller
{
    /**
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
        $equipos= Equipo:: select('equipo.Equipo_ID',
            'equipo.Descripcion as desEquipo',
            'equipo.Tag',
            'area.Descripcion AS Area',
            'sistema.Descripcion AS Sistema',
            'subsistema.Descripcion AS SubSistema')

            ->join('area','area.Area_ID','=','equipo.area_id')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.sistema_id')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.subsistema_id')->get();
        return Datatables::of($equipos)->addColumn('action', function ($equipos) {
            return '<a href="/equipo/'.$equipos->Equipo_ID.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <a href="/equipo/'.$equipos->Equipo_ID.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })->make(true);
      /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
