<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
class tablainicio extends Controller
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
            'area.Descripcion AS Area'/*,
            'sistema.Descripcion AS Sistema',
            'subsistema.Descripcion AS SubSistema'*/)

            ->join('area','area.Area_ID','=','equipo.area_id')
     /*       ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.sistema_id')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.subsistema_id')*/->get();
        return Datatables::of($equipos)

            ->addColumn('doc', function ($equipos) {
                return '<a href="javascript:window.open(\''.route('planos.show',$equipos->Equipo_ID).'\',\'\',\'width=700,height=500,left=100,top=50,toolbar=no,menubar=no,directories=no,location=no\');void 0" target="_blank" class="btn btn-xs btn-primary" title="Ver Documentacion"><i class="glyphicon glyphicon-book"></i></a>';})
            ->addColumn('datostecnicos', function ($equipos) {
                return '<a href="javascript:window.open(\''.route('pdfbomba.show',$equipos->Equipo_ID).'\',\'\',\'width=600,height=900,left=100,top=50,toolbar=no,menubar=no,directories=no,location=no\');void 0"  class="btn btn-xs btn-primary" title="Ver Datos Tecnicos"><i class="glyphicon glyphicon-file"></i> </a>';})
            ->addColumn('rep', function ($equipos) {
                return '<a href="'.route('mostrarepu.show',$equipos->Equipo_ID).'" title="Ver Repuesto" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-wrench"></i></a>';})
            ->addColumn('per', function ($equipos) {
                return '<a href="'.route('pdfbomba.show',$equipos->Equipo_ID).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-user"></i></a>';})
            ->addColumn('historia', function ($equipos) {
                return '<a href="'.route('pdfbomba.show',$equipos->Equipo_ID).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list-alt"></i></a>';})
->make(true);
      /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
