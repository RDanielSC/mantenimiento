<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;
class tablahistorial extends Controller
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
        $historiales = DB::select('select		historial.Historial_ID,
                equipo.Descripcion as Equipo ,
                
(DATE_FORMAT(historial.FechaInicio,"%d-%m-%Y")) as FechaInicio,
                (DATE_FORMAT(historial.FechaFin,"%d-%m-%Y")) as FechaFin ,
                operador.Nombre AS Operador,
                repuesto.Descripcion AS Repuesto,
                tipoman.Descripcion as Tipoman,
                historial.Descripcion,
                datediff(FechaFin,FechaInicio) as Total,
                historial.path as imghis
from historial,equipo,operador,repuesto,tipoman
where (equipo.Equipo_ID=historial.Equipo_ID)and
            (operador.Operador_ID=historial.Operador_ID)and
            (repuesto.Repuesto_ID=historial.Repuesto_ID)and
            (tipoman.TipoMan_ID=historial.TipoMan_ID)')->get();
        return Datatables::of($historiales)->addColumn('action', function ($historiales) {
            return '<a href="/historial/'.$historiales->Historial_ID.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <a href="/historial/'.$historiales->Historial_ID.'" class="btn btn-xs btn-primary"><i "></i> Ver PDF</a>';
        })->addColumn('documentacion', function ($historiales) {
            return '<a href="/imag/'.$historiales->path.'/edit" class="btn btn-xs btn-primary"><i "></i> Ver Doc</a>';
        })->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
