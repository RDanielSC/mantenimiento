<?php

namespace App\Http\Controllers;

use App\Models\Documentacion;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;
class tabladocumentacion extends Controller
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
        $documentaciones = Documentacion::select('documentacion.Doc_ID',
            'documentacion.Descripcion',
            'equipo.Tag',
            'equipo.Descripcion AS Equipo',
            'area.Descripcion AS Area',
            'documentacion.urlDoc')
            ->join('equipo','equipo.Equipo_ID','=','documentacion.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')

            ->get();
        return Datatables::of($documentaciones)->addColumn('action', function ($documentaciones) {
            return '<a href="/documentacion/'.$documentaciones->Doc_ID.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                   <a href="/documentacion/'.$documentaciones->Doc_ID.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })->addColumn('documentacion', function ($documentaciones) {
            return '<a href="/imag/'.$documentaciones->urlDoc.'" class="btn btn-xs btn-primary"><i "></i> Ver Doc</a>';
        })->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
