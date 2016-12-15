<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Models\Aeroenfriador;
use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
class tablaAeroenfriador extends Controller
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
        $aeroenfriadores = Aeroenfriador::select('aeroenfriadores.Aeroenfriador_ID',
            'equipo.Descripcion AS LEQUIPO',
            'equipo.Tag',
            'area.Descripcion AS LAREA',
            'sistema.Descripcion AS SIST',
            'subsistema.Descripcion AS SUBSIS',
            'equipo.Equipo_ID')
            ->join('equipo','equipo.Equipo_ID','=','aeroenfriadores.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID')->get();
        return Datatables::of($aeroenfriadores)
            ->addColumn('action', function ($aeroenfriadores) {
                return '<a href="'.route('aeroenfriador.edit',$aeroenfriadores->Aeroenfriador_ID).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <a href="'.route('aeroenfriador.destroy',$aeroenfriadores->Aeroenfriador_ID).'" onclick="return confirm(\'¿Seguro que quieres eliminar a '.$aeroenfriadores->LEQUIPO.'?\')" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>
                        <a href="'.route('pdfaeroenfriador.show',$aeroenfriadores->Aeroenfriador_ID).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Ver PDF</a>';})
            ->addColumn('documentacion', function ($aeroenfriadores) {
                return '<a href="'.route('planos.show',$aeroenfriadores->Equipo_ID).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Ver DOC</a>
                       ';})

            ->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
