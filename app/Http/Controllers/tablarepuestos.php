<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
use DB;
class tablarepuestos extends Controller
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
        $repuestos=Repuesto::select('repuesto.Repuesto_ID',
            'repuesto.Descripcion',
            'repuesto.NoParte',
            'repuesto.Dimension',
            'equipo.Tag',
            'area.Descripcion AS Area',
            'repuesto.imgrepuesto')

            ->leftjoin('equipo','equipo.Equipo_ID','=','repuesto.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->get();
        return Datatables::of($repuestos)->
        addColumn('action', function ($repuestos) {

            return '<a href="/repuesto/'.$repuestos->Repuesto_ID.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <a href="/repuesto/'.$repuestos->Repuesto_ID.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
            ->addColumn('imagen', function ($repuestos) {
                return '<img src="imagenes/'.$repuestos->imgrepuesto.'" alt="" style="width:100px" >';
            })->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
